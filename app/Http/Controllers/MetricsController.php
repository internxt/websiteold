<?php

namespace App\Http\Controllers;

use Cache;
use Zttp\Zttp;
use Illuminate\Support\Arr;

class MetricsController extends Controller
{
	protected $originalPrice = 1.74;

	public function show()
	{
		$metrics = Cache::remember('metrics', now()->addMinutes(30), function () {

			$response = Zttp::get(config('services.coinmarketcap.url'));

			if ($response->isOk()) {
				return Arr::get($response->json(), 'data.INXT.quote.EUR');
			}

		});

		return view('inxt.metrics', compact('metrics'));
	}
}
