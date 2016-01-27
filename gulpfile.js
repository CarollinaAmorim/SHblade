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

    //delete less

});