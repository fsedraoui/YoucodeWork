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

const mixConfig = mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ]);


const sassFiles = ["pages/auth"]; // add any sass that need to be compiled here with the path to the file

sassFiles.forEach(file => {
    mixConfig.sass(`resources/sass/${file}.scss`, `public/css/${file}.css`, {
        sassOptions: {
            autoprefixer: true,
        },
    });
});
