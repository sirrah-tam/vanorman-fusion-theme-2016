var elixir = require('laravel-elixir');
// var BrowserSync = require('laravel-elixir-browsersync');
/*
 |--------------------------------------------------------------------------
 | Elixir Configuration
 |--------------------------------------------------------------------------
 |
 */
elixir.config.bowerDir         = './bower_components';
elixir.config.publicPath       = '';
elixir.config.assetsPath       = './assets';
elixir.config.css.outputFolder = './dist/css';
elixir.config.js.outputFolder  = './dist/js';

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */
// Configurations
var config = {
    bowerPath: './bower_components' // Should be the same as directory path in .bowerrc
};

var paths = {
    'hydrogen': elixir.config.bowerDir + '/hydrogen/',
    'jquery': elixir.config.bowerDir + '/jquery/',
    'bootstrap': elixir.config.bowerDir + '/bootstrap-sass/assets/javascripts/',
    'vue': elixir.config.bowerDir + '/vue/dist/',
    'vueresource': config.bowerPath + '/vue-resource/dist/',
    'blacktie': elixir.config.assetsPath + '/sass/vendor/black-tie/',
    'instantclick': elixir.config.bowerDir + '/instantclick/',
    'simpleWeather': elixir.config.bowerDir + '/simpleWeather/',
    'waypoints': elixir.config.bowerDir + '/waypoints/lib/',
    'animate': elixir.config.bowerDir + '/animate.css/',
};

elixir(function(mix) {

    // Sass
    mix.sass('./assets/sass/app.scss', elixir.config.css.outputFolder, {
        includePaths: [
            paths.blacktie,
            paths.hydrogen + 'scss/'
            // paths.animate + 'source/'
        ]
    });

    // Styles
    mix.styles([   
        paths.animate + 'animate.css',
    ], 'assets/css/app.css', elixir.config.css.outputFolder + 'app.css');

    // mix.version('public/css/app.css');

    // Scripts
    mix.scripts([
        paths.jquery + 'dist/jquery.js',
        // paths.vue + 'vue.js',
        // paths.vueresource + 'vue-resource.js',
        paths.hydrogen + 'js/plugins',
        paths.hydrogen + 'js/app.js',
        './assets/js/salvattore.min.js',
        paths.instantclick + 'instantclick.js',
        paths.simpleWeather + 'jquery.simpleWeather.js',
        paths.waypoints + 'jquery.waypoints.js',
        './assets/js/highlight.pack.js',
        // './assets/js/fx-kit.js',
        './assets/js/components/*.js'
    ]);

    // Fonts
    mix.copy(paths.blacktie + 'fonts', './assets/fonts');
});
