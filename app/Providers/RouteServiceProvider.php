<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-23 17:36:14             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Providers; use Illuminate\Cache\RateLimiting\Limit; use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider; use Illuminate\Http\Request; use Illuminate\Support\Facades\RateLimiter; use Illuminate\Support\Facades\Route; class RouteServiceProvider extends ServiceProvider { public const HOME = "\x2f"; public function boot() { $this->configureRateLimiting(); $this->routes(function () { Route::middleware("\141\x70\151")->prefix("\141\x70\x69")->group(base_path("\x72\x6f\165\164\x65\x73\x2f\x61\160\151\x2e\x70\x68\160")); Route::middleware("\167\x65\142")->group(base_path("\162\x6f\x75\x74\x65\163\57\x77\145\142\56\x70\x68\160")); }); } protected function configureRateLimiting() { RateLimiter::for("\x61\160\x69", function (Request $request) { return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip()); }); } }
