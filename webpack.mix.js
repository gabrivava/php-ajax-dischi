let mix = require('laravel-mix');

mix.js('assets/js/app.js', 'js')
.sass('assets/css/app.scss', 'css')
.setPublicPath('dist');