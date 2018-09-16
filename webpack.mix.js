let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.copy('node_modules/animate.css/animate.min.css', 'public/css/libs/animate');

mix.copy('node_modules/dropzone/dist', 'public/css/libs/dropzone');

mix.copy('node_modules/lightbox2/dist/css', 'public/css/libs/lightbox2');
mix.copy('node_modules/lightbox2/dist/images', 'public/images');

mix.styles([
        'public/css/libs/animate/animate.min.css',
        'public/css/libs/lightbox2/lightbox.min.css',
        'public/css/libs/dropzone/min/dropzone.min.css',
        // 'libs/fontawesome/css/all.css',
     ], 'public/css/libs.css');

mix.js('resources/assets/js/app.js', 'public/js').version();
mix.sass('resources/assets/sass/app.scss', 'public/css').version();

// mix.version(['js/app.js','css/app.css']);
