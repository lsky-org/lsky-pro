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

mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]);
mix.less('resources/css/fontawesome.less', 'public/css');
mix.less('resources/css/common.less', 'public/css');

mix.copy('node_modules/blueimp-file-upload/js/vendor/jquery.ui.widget.js', 'public/js');
mix.copy('node_modules/blueimp-file-upload/js/jquery.iframe-transport.js', 'public/js');
mix.copy('node_modules/blueimp-file-upload/js/jquery.fileupload.js', 'public/js');
mix.copy('node_modules/blueimp-load-image/js/load-image.all.min.js', 'public/js')

