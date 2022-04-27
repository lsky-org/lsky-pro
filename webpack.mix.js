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
mix.less('resources/css/gallery.less', 'public/css');

mix.copy('node_modules/blueimp-file-upload/js/vendor/jquery.ui.widget.js', 'public/js/blueimp-file-upload');
mix.copy('node_modules/blueimp-file-upload/js/jquery.iframe-transport.js', 'public/js/blueimp-file-upload');
mix.copy('node_modules/blueimp-file-upload/js/jquery.fileupload.js', 'public/js/blueimp-file-upload');
mix.copy('node_modules/blueimp-load-image/js/load-image.all.min.js', 'public/js/blueimp-load-image')

// justifiedGallery
mix.copy('node_modules/justifiedGallery/dist/css/justifiedGallery.min.css', 'public/css/justified-gallery');
mix.copy('node_modules/justifiedGallery/dist/js/jquery.justifiedGallery.min.js', 'public/js/justified-gallery');

// viewer.js
mix.copy('node_modules/viewerjs/dist/viewer.min.css', 'public/css/viewer-js')
mix.copy('node_modules/viewerjs/dist/viewer.min.js', 'public/js/viewer-js')

// clipboard
mix.copy('node_modules/clipboard/dist/clipboard.min.js', 'public/js/clipboard')
mix.copy('node_modules/copy-image-clipboard/dist/index.browser.js', 'public/js/clipboard')

// dragselect
mix.copy('node_modules/dragselect/dist/ds.min.js', 'public/js/dragselect')

// context-menu.min.js
mix.less('resources/css/context-js.less', 'public/css/context-js')
mix.copy('resources/js/context-js.js', 'public/js/context-js')

// apache echarts
mix.copy('node_modules/echarts/dist/echarts.min.js', 'public/js/echarts')

// masonry layout
mix.copy('node_modules/masonry-layout/dist/masonry.pkgd.min.js', 'public/js/masonry')
// imagesloaded
mix.copy('node_modules/imagesloaded/imagesloaded.pkgd.min.js', 'public/js/imagesloaded')

// markdown css
mix.copy('node_modules/github-markdown-css/github-markdown.css', 'public/css/markdown-css')
mix.copy('node_modules/github-markdown-css/github-markdown-light.css', 'public/css/markdown-css')
