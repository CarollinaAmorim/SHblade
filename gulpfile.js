var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less(["resources/assets/less/pagine/home.less"], "public/css/home.css")
        .less(["resources/assets/less/pagine/sobre.less"], "public/css/sobre.css")
        .less(["resources/assets/less/pagine/servizi.less"], "public/css/servizi.css")
        .less(["resources/assets/less/pagine/processo.less"], "public/css/processo.css")
        .less(["resources/assets/less/pagine/portfolio.less"], "public/css/portfolio.css")
        .less(["resources/assets/less/pagine/contatti.less"], "public/css/contatti.css")
        .less(["resources/assets/less/pagine/progetto_semplice.less"], "public/css/progetto_semplice.css")
        .less(["resources/assets/less/pagine/progetto_completo.less"], "public/css/progetto_completo.css");
});


elixir(function(mix) {
    mix.scripts(["componenti/layout.js","componenti/slider_background.js", "pagine/home.js", "componenti/analytics.js"], "public/js/home.min.js")
        .scripts(["componenti/layout.js","pagine/sobre.js","componenti/analytics.js"], "public/js/sobre.min.js")
        .scripts(["componenti/layout.js","componenti/one_page_scroll.js", "pagine/servizi.js","componenti/analytics.js"], "public/js/servizi.min.js")
        .scripts(["componenti/layout.js","pagine/processo.js","componenti/analytics.js"], "public/js/processo.min.js")
        .scripts(["componenti/layout.js","componenti/one_page_scroll.js", "pagine/portfolio.js","componenti/analytics.js"], "public/js/portfolio.min.js")
        .scripts(["componenti/layout.js","pagine/contatti.js","componenti/analytics.js"], "public/js/contatti.min.js")
        .scripts(["componenti/layout.js","pagine/progetto.js","componenti/analytics.js"], "public/js/progetto.min.js");
});
