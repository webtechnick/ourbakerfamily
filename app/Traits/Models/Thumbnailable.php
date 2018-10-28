<?php

namespace App\Traits\Models;

use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Exception\NotReadableException;
use Intervention\Image\Facades\Image;

trait Thumbnailable
{
    /**
     * Will return a path to the thumbnail at given size
     * if size is not present, create it, store it, then return path.
     * @param  integer $width [description]
     * @return [type]         [description]
     */
    public function thumbnail($size = null)
    {
        $size = $this->getSize($size);
        if ($this->isExternalPath()) {
            return $this->path;
        }
        if (!$this->thumbnailExists($size)) {
            $this->createThumbnail($size);
        }
        return Storage::disk(config('thumbnail.disk'))->url($this->thumbnailFileName($size));
    }

    /**
     * Allow for external path
     * @return boolean [description]
     */
    public function isExternalPath()
    {
         return str_contains($this->getFilePath(), ['http','https']);
    }

    /**
     * Determine if the thumbnail exists.
     * @param  integer $size [description]
     * @return [type]        [description]
     */
    public function thumbnailExists($size = null)
    {
        $size = $this->getSize($size);
        return Storage::disk(config('thumbnail.disk'))
                        ->exists($this->thumbnailFileName($size));
    }

    /**
     * Give me the full path to save the thumbnail to.
     * @param  integer $size [description]
     * @return [type]        [description]
     */
    public function thumbnailPath()
    {
        return config('filesystems.disks.'. config('thumbnail.disk') .'.root');
    }

    /**
     * Get the calculated thumbnail path.
     * @param  integer $size [description]
     * @return [type]        [description]
     */
    public function thumbnailFileName($size = null)
    {
        return $this->getSize($size) . 'x' . $this->getFileName();
    }

    /**
     * Create the thumbnail using the Image library
     * @param  integer $size [description]
     * @return boolean success
     */
    private function createThumbnail($size = null)
    {
        if (!$this->fileExists()) {
            return false; // File doesn't exist, return
        }
        $img = Storage::disk(config('thumbnail.disk'))->get($this->getFileName());

        try {
            $thumbnail = Image::make($img)
                          ->fit($this->getSize($size))
                          ->save($this->thumbnailPath() . '/' . $this->thumbnailFileName($size));
        } catch (NotReadableException $e) {
            // Delete the photo
            Storage::disk(config('thumbnail.disk'))->delete($this->getFileName());
            // Throw new exception
            throw new \Exception('Unable to process image. Check filetype.');
        }

        return $thumbnail;
    }

    /**
     * See if the root file exists.
     * @return [type] [description]
     */
    public function fileExists()
    {
        if ($this->isExternalPath()) {
            return true;
        }
        return Storage::disk(config('thumbnail.disk'))
                        ->exists($this->getFileName());
    }

    /**
     * Get the size
     * @param  [type] $size [description]
     * @return [type]       [description]
     */
    private function getSize($size = null)
    {
        return $size ?: config('thumbnail.size');
    }

    /**
     * Get the filename of the file
     * @return [type] [description]
     */
    private function getFileName()
    {
        $name_field = config('thumbnail.name_field');
        return $this->$name_field;
    }

    /**
     * Get the filename of the file
     * @return [type] [description]
     */
    private function getFilePath()
    {
        $path_field = config('thumbnail.path_field');
        return $this->$path_field;
    }
}