var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */
var paths = {
	'bower': './vendor/bower_components/',
	'jquery': './vendor/bower_components/jquery/',
	'bootstrap': './vendor/bower_components/bootstrap-sass-official/assets/',
	'fontawesome': './vendor/bower_components/fontawesome/',
	'dropzone': './vendor/bower_components/dropzone/dist/',
	'jasny': './vendor/bower_components/jasny-bootstrap/dist/',
	'swipebox': './vendor/bower_components/swipebox/src/',
	'sortable': './vendor/bower_components/Sortable/'
}

elixir(function(mix) {
	mix.sass('**/*', 'public/css/', {includePaths: [paths.bootstrap + 'stylesheets', paths.fontawesome + 'scss']})
		.copy(paths.bootstrap + 'fonts/bootstrap/**', 'public/fonts/bootstrap')
		.copy(paths.fontawesome + 'fonts/**', 'public/fonts/fontawesome')
		.copy(paths.swipebox + 'img/**', 'public/images')
		.scripts([
			paths.jquery + "dist/jquery.js",
			paths.bootstrap + "javascripts/bootstrap.js",
			paths.bower + "select2/dist/js/select2.js",
			paths.bower + "fancybox/source/jquery.fancybox.js",
			paths.bower + "moment/moment.js",
			paths.bower + "moment-range/lib/moment-range.js",
			paths.bower + "jcrop/js/jquery.Jcrop.js",
			paths.bower + "slick-carousel/slick/slick.js",
			paths.dropzone + "dropzone.js",
			paths.jasny + "js/jasny-bootstrap.js",
			paths.sortable + "Sortable.js",
			paths.sortable + "jquery.binding.js",
			paths.swipebox + "js/jquery.swipebox.js",
		], 'public/js/vendor.js', './')
		// .browserify('admin/app.js', './public/js/admin/app.js')
		.browserify('app.js', './public/js/app.js')
		.version([
			'css/app.css',
			'css/admin/app.css',
			'js/vendor.js',
			// 'js/admin/app.js',
			'js/app.js',
		])
});

