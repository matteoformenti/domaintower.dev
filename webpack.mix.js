const mix = require('laravel-mix');


mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss')
    ]);

mix.browserSync({proxy: 'localhost:8000', 'notify': false, 'host': '2.235.240.13', open: 'external'});
mix.disableSuccessNotifications();
mix.disableNotifications();