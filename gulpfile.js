var elixir = require('laravel-elixir');
            require('laravel-elixir-jade');

elixir.config.sourcemaps = false;

elixir(function(mix) {
    mix.jade({
        baseDir: './resources',
        src: '/assets/jade/',
        search: '/**/*.jade',
        dest: '/views/',
        pretty: true,
        blade: true
    });

    elixir(function(mix) {
        mix.less(["resources/assets/less/pages/home.less"], "public/css/home.css")
            .less(["resources/assets/less/pages/sobre.less"], "public/css/sobre.css")
            .less(["resources/assets/less/pages/servizi.less"], "public/css/servizi.css")
            .less(["resources/assets/less/pages/processo.less"], "public/css/processo.css")
            .less(["resources/assets/less/pages/portfolio.less"], "public/css/portfolio.css")
            .less(["resources/assets/less/pages/contatti.less"], "public/css/contatti.css")
            .less(["resources/assets/less/pages/progetto_semplice.less"], "public/css/progetto_semplice.css")
            .less(["resources/assets/less/pages/progetto_completo.less"], "public/css/progetto_completo.css");
    });


    elixir(function(mix) {
        mix.scripts(["components/layout.js","components/slider_background.js", "pages/home.js", "components/analytics.js"], "public/js/home.min.js")
            .scripts(["components/layout.js","pages/sobre.js","components/analytics.js"], "public/js/sobre.min.js")
            .scripts(["components/layout.js","components/one_page_scroll.js", "pages/servizi.js","components/analytics.js"], "public/js/servizi.min.js")
            .scripts(["components/layout.js","pages/processo.js","components/analytics.js"], "public/js/processo.min.js")
            .scripts(["components/layout.js","components/one_page_scroll.js", "pages/portfolio.js","components/analytics.js"], "public/js/portfolio.min.js")
            .scripts(["components/layout.js","pages/contatti.js","components/analytics.js"], "public/js/contatti.min.js")
            .scripts(["components/layout.js","pages/progetto.js","components/analytics.js"], "public/js/progetto.min.js");
    });

});