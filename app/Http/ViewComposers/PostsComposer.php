<?php

namespace App\Http\ViewComposers;

use Log;
use Cache;
use Zttp\Zttp;
use Carbon\Carbon;
use Illuminate\View\View;

class PostsComposer
{

    public function compose(View $view)
    {

    	$posts = Cache::remember('posts', 120, function () {

    		Log::info('Cache miss: "posts" - Fetching from Medium...');

    		// Initialise empty collection, in case posts cannot be retrieved
    		$posts = collect();

    		try {

				$response = Zttp::get(config('services.rss2json.url'), [
					'rss_url' => config('services.medium.rss'),
				]);

				if(!$response->isOk()) {

					Log::error("Medium feed returned an error", [
						'status' => $response->status(),
						'body' => $response->json(),
					]);

					return $posts;

				}

    		}
    		catch(\Throwable $e) {

    			Log::error("Guzzle returned an error", [
					'error' => $e,
				]);

				return $posts;

    		}

	    	$posts = collect($response->json()['items'])
		    	->sortByDesc('pubDate')
		    	->transform(function($post) {
		    		return [
		    			'title' => $post['title'],
		    			'date' => Carbon::parse($post['pubDate'])->format('F j Y'),
		    			// Add max size to thumbnail image
		    			'image' => preg_replace("/max\/[0-9]+/", "max/710", $post['thumbnail']),
		    			'url' => $post['link'],
		    			'tags' => $post['categories'],
		    		];
		    	})
		    ;

		    return $posts;

		});

        $view->with('mediumPosts', $posts);

    }

}
