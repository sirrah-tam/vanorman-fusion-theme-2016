var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Configuration
 |--------------------------------------------------------------------------
 |
 */

elixir.config.bowerDir         = '/bower_components';
elixir.config.publicPath       = '';
elixir.config.assetsPath       = './assets';
elixir.config.css.outputFolder = './assets/css';
elixir.config.js.outputFolder  = './assets/js';

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
    'hydrogen': config.bowerPath + '/hydrogen/',
    'jquery': config.bowerPath + '/jquery/',
    'vue': config.bowerPath + '/vue/dist/',
    'vueresource': config.bowerPath + '/vue-resource/dist/',
};

elixir(function(mix) {
    mix.sass('./assets/sass/app.scss', 'assets/css', {
        includePaths: [
            paths.blacktie + 'scss/',
            paths.hydrogen + 'scss/'
        ]
    });

    mix.styles(
        [   
            './assets/css/bootstrap.css',
            './assets/css/fx-kit.css',
            './assets/css/cosmo.css',
        ], './assets/css/app.css', './'
    );

    mix.scripts([
        paths.jquery + 'dist/jquery.js',
        paths.vue + 'vue.js',
        paths.vueresource + 'vue-resource.js',
        './assets/js/fx-kit.js',
        './assets/js/components/*.js'
    ]);

    mix.copy(paths.blacktie + 'fonts', './assets/fonts');
});
