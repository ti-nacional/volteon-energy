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

require('laravel-mix-purgecss');

mix.postCss('public/assets/site/css/colors.css', 'assets/site/css')
    .postCss('public/assets/site/css/components.css', 'assets/site/css')
    .postCss('public/assets/site/css/style.css', 'assets/site/css')
    .purgeCss({
        enabled: true,
    });