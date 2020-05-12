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
    .copy('resources/assets/semantic/dist/semantic.min.css','public/css/semantic.min.css')
    .copy('resources/assets/semantic/dist/themes','public/css/themes')
    .copy('node_modules/jquery/dist/jquery.min.js','public/js/jquery.min.js')
    .copy('resources/assets/semantic/dist/semantic.min.js','public/js/semantic.min.js')
    .copy('node_modules/jquery.counterup/jquery.counterup.min.js','public/plugins/counterup/jquery.counterup.min.js')
    .copy('node_modules/waypoints/lib/jquery.waypoints.min.js','public/plugins/counterup/jquery.waypoints.min.js')
    .copy('node_modules/flot/dist/es5/jquery.flot.js','public/plugins/flot/jquery.flot.js')
    .copy('node_modules/js-cookie/src/js.cookie.js','public/plugins/js-cookie/js.cookie.js')
    .copy('node_modules/chart.js/dist/Chart.min.js','public/plugins/chartjs/chart.min.js')
    .copy('node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js','public/plugins/nicescrool/jquery.nicescroll.min.js')
    .copy('node_modules/pace-js/pace.min.js','public/plugins/pacejs/pace.js')
    .copy('node_modules/chartist/dist/chartist.min.js','public/plugins/chartist/chartist.min.js')
    ;
