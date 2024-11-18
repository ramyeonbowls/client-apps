<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:20             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Providers; use Illuminate\Cache\RateLimiting\Limit; use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider; use Illuminate\Http\Request; use Illuminate\Support\Facades\RateLimiter; use Illuminate\Support\Facades\Route; class RouteServiceProvider extends ServiceProvider { public const HOME = "\x2f"; public function boot() { $this->configureRateLimiting(); $this->routes(function () { Route::middleware("\141\160\x69")->prefix("\141\160\151")->group(base_path("\162\x6f\165\x74\x65\163\x2f\x61\160\151\x2e\160\150\x70")); Route::middleware("\167\145\x62")->group(base_path("\162\157\x75\164\x65\163\57\167\145\142\x2e\160\x68\160")); }); } protected function configureRateLimiting() { RateLimiter::for("\141\160\x69", function (Request $request) { return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip()); }); } }
