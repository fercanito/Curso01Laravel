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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.sass', 'public/css');

mix.scripts([
  'node_modules/jquery/dist/jquery.js',
  'node_modules/bootstrap-sass/assets/javascripts/bootstrap.js',
  'resources/assets/js/app.js'
],'public/js/all.js');

mix.browserSync({

  proxy: 'curso.dv',
  host: 'curso.dev',
  open: 'external'

});
