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

mix.setPublicPath('../');

mix.js('resources/js/app.js', 'js')
    .react()
    .extract(['react'])
    .postCss('resources/css/app.css', 'css', [
        //
    ])
    .js('resources/js/custom.js', 'js');
