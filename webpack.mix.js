const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

 mix.js('resources/js/app.js', 'public/js/app.js')
    .js('resources/js/login.js', 'public/js/login.js')
    .js('resources/js/role.js', 'public/js/role.js')
    .js('resources/js/usuario.js', 'public/js/usuario.js')
    .sass('resources/sass/app.scss', 'public/css/app.css')
    .sass('resources/sass/login.scss', 'public/css/login.css');
