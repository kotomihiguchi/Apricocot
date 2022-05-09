const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/landlord.scss', 'public/css')
    .sass('resources/sass/jobindex.scss', 'public/css')
    .sass('resources/sass/jobedit.scss', 'public/css')
    .sass('resources/sass/jobcheck.scss', 'public/css')
    .sass('resources/sass/blogcreate.scss', 'public/css');