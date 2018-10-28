<?php

namespace App;

use App\Traits\Models\Thumbnailable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;

class Photo extends Model
{
    use Thumbnailable;

    protected $fillable = [
        'title',
        'description',
        'is_active',
        'is_featured',
    ];

    /**
     * Base directory path relative to /public
     * @return String path relative to public directory
     */
    public function baseDir()
    {
        // 'uploads/photos/'
        return substr(config('filesystems.disks.uploads.url'), 1) . '/';
    }

    /**
     * Construct a photo from an uploaded file.
     *
     * @param  UploadedFile $file [description]
     * @return [type]             [description]
     */
    public static function fromUploadedFile(UploadedFile $file, $data = [])
    {
        // Start photo
        $photo = (new self)->saveAs($file->getClientOriginalName());
        // Fill in any additional data
        $photo->fill($data);
        // Move uploaded photo to directory
        $file->move(public_path($photo->baseDir()), $photo->name);
        // Eager create a thumbnail for ourselves
        // $photo->thumbnail(200);
        // Make concrete
        $photo->save();

        return $photo;
    }

    /**
     * filling the fields based on a passined in filename
     *
     * @param  String filename
     * @return self
     */
    public function saveAs($filename)
    {
        $this->name = time() . '-' . $filename;
        return $this;
    }

    /**
     * Mutator, if name changes, also updated path
     *
     * @param string name
     */
    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;
        $this->path = '/' . $this->baseDir() . $name;
    }

    /**
     * [pic description]
     * @return [type] [description]
     */
    public function pic($size = 200, $class = '')
    {
        if ($size == 'full') {
            return '<img src="'. $this->path .'" class="img-rounded img-responsive center '. $class .'">';
        }
        return '<img src="'. $this->thumbnail($size) .'" width="'.$size.'" style="width: '. $size .'px;" class="img-rounded img-responsive center '. $class .'">';
    }
}
