let mix = require('laravel-mix');

/** 
 * Mix Asset Management for Hellcat
 *
 * @package Hellcat
 */
mix.scripts(['src/resources/assets/js/*.js'], 'src/public/hellcat.js');
mix.scripts(['src/resources/assets/js/*.js'], 'src/public/hellcat-assets.js');
mix.styles(['src/resources/assets/css/*.css'], 'src/public/hellcat.css');
