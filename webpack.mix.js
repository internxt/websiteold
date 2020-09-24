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
	], 'public/js/analytics.js')
		.sass('resources/assets/sass/app.scss', 'public/css')
		.sass('resources/assets/sass/drive/style.scss', 'public/css')
		.minify('public/css/style.css')
		.sass('resources/assets/sass/drive/framework.scss', 'public/css')
		.minify('public/css/framework.css')
	.options({
		processCssUrls: false,
		postCss: [ tailwindcss('tailwind.config.js') ],
	})
	.browserSync({
		proxy: 'internxt-new.test',
		host: '192.168.0.12',
		tunnel: true,
	})
   .version()
;
