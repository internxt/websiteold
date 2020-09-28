<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'drive.home')->name('home');

Route::prefix('drive')->name('xcloud.')->group(function () {

	Route::view('/', 'xcloud.overview')->name('overview');
	Route::view('security', 'xcloud.technology')->name('technology');
	Route::view('interface', 'xcloud.interface')->name('interface');
	Route::view('individuals', 'xcloud.individuals')->name('individuals');
	Route::view('teams', 'xcloud.teams')->name('teams');
	Route::view('mass-storage', 'xcloud.mass-storage')->name('mass-storage');
	Route::view('get-started', 'xcloud.get-started')->name('get-started');
	Route::view('eco', 'xcloud.eco')->name('eco');

});

Route::prefix('core')->name('xcore.')->group(function () {

	Route::view('/', 'xcore.overview')->name('overview');
	Route::view('setup-and-tips', 'xcore.get-started')->name('get-started');

	Route::redirect('get-started', 'setup-and-tips');

});

Route::prefix('inxt')->name('inxt.')->group(function () {

	Route::view('/', 'inxt.overview')->name('overview');
	Route::get('metrics', 'MetricsController@show')->name('metrics');
	Route::view('buy', 'inxt.buy')->name('buy');

});

Route::name('more.')->group(function () {

	Route::view('about', 'about')->name('about');
	Route::view('resources', 'resources')->name('resources');
	Route::view('consultancy', 'consultancy')->name('consultancy');
	Route::view('vision', 'vision')->name('vision');
	Route::view('privacy', 'privacy')->name('privacy');
	Route::view('terms', 'terms')->name('terms');

});

Route::prefix('checkout')->name('checkout.')->group(function () {

	Route::post('complete', 'StripeController@processFulfillment')->name('complete');

	Route::view('success', 'checkout.success')->name('success');

	Route::view('canceled', 'checkout.canceled')->name('canceled');

});

Route::redirect('roadmap', config('services.trello.roadmap'));

Route::any('buy', 'StripeController@attemptPayment')->name('stripe.purchase');
