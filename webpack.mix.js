let mix = require('laravel-mix');


mix.scripts([
    'node_modules/jquery/dist/jquery.js',
    'node_modules/bootstrap/dist/js/bootstrap.js',
  //  'node_modules/popper.js/dist/popper.js',
], 'js/all.js')
   //.sass('resources/assets/sass/app.scss', 'public/css')
   .styles([    
    'node_modules/bootstrap/dist/css/bootstrap.css',   
    'resources/assets/css/style.css', 
], 'css/all.css');

//node_modules/jquery/dist/jquery.js
//resources/assets/js/app.js

mix.browserSync('http://localhost:8000');