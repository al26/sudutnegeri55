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

mix.js('resources/assets/js/app.js', 'public/vendor/js')
   .sass('resources/assets/sass/app.scss', 'public/vendor/css')
   .copy('resources/assets/images/*', 'public/vendor/images', false)
   .options({processCssUrls: false});
