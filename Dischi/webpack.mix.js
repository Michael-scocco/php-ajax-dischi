let mix = require('laravel-mix');

mix
.js('src/app.js', 'js')//qui crea la cartella js, e crea anke il file all'interno della cartella
.sass('src/app.scss', 'css')//qui crea la cartella css, e crea anke il file all'interno della cartella
.copyDirectory('src/img', 'dist/img')
.setPublicPath('dist');//crea la cartella dist(cartella padre)