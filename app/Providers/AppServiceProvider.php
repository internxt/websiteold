<?php

namespace App\Providers;

use Log;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $fileExtension = 'exe';

        $agent = new Agent();

        $platform = $agent->platform();

        if ($platform) { // Returns false from console

            if (in_array($platform, [
                "OS X",
                "Macintosh",
            ])) {
                $platform = "Mac";
            }

            if (in_array($platform, [
                "Debian",
                "OpenBSD",
                "Ubuntu",
            ])) {
                $platform = "Linux";
            }

            Log::debug("Platform: ", compact('platform'));

            $supportedOperatingSystems = [
                'Windows' => 'exe',
                'Mac' => 'dmg',
                'Linux' => 'deb',
            ];

            if (array_key_exists($platform, $supportedOperatingSystems)) {
                $fileExtension = $supportedOperatingSystems[$platform];
            }

        }

        $xcloudDownloadLink = asset("downloads/drive.$fileExtension");
        $xcoreDownloadLink = asset("downloads/core.$fileExtension");

        // Generate canonical URL, removing double slash on homepage and stripping last slash on others
        $appUrl = config('app.url');
        $currentUri = rtrim(request()->getRequestUri(), '/');
        $canonical = preg_replace('/([a-z])\/\//','$1/', $appUrl.$currentUri );
        $canonical = rtrim($canonical, '/');
        View::share(compact('agent', 'platform', 'xcloudDownloadLink', 'xcoreDownloadLink', 'canonical'));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
