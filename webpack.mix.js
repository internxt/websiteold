let mix = require('laravel-mix');
const tailwindcss = require('tailwindcss')

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.js('resources/assets/js/app.js', 'public/js')
	.combine([
		'resources/assets/js/analytics/google-analytics.js',
		'resources/assets/js/analytics/facebook.js',
		'resources/assets/js/analytics/mailerlite.js',
		'resources/assets/js/analytics/drift.js',
		//'resources/assets/js/analytics/mixpanel.js', // Not currently used
	], 'public/js/analytics.js')
    .sass('resources/assets/sass/app.scss', 'public/css')
	.options({
		processCssUrls: false,
		postCss: [ tailwindcss('tailwind.config.js') ],
	})
	.browserSync({
		proxy: 'local.internxt.uk',
		host: '192.168.1.20',
		tunnel: true,
	})
   .version()
;
