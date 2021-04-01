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
    .styles([
    'public/css/style2/style2.css',
    'public/css/style2/responsive.css'
    ], 'public/css/myCustom.css')
    .scripts([
        'public/js/custom2.js'
    ], 'public/js/myCustom.js');