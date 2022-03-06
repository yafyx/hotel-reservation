const mix = require("laravel-mix");

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

mix.js("resources/js/app.js", "public/js")
    .sass("resources/scss/app.scss", "public/css")
    .options({
        postCss: [require("tailwindcss")],
    });

if (mix.inProduction()) {
    mix.version();
}

/*
 * this line for livereload on during development
 */
mix.browserSync({
    proxy: "127.0.0.1:8000",
});
