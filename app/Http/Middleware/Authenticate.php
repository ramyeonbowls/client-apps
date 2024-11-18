<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:20             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Http\Middleware; use Closure; use Illuminate\Auth\Middleware\Authenticate as Middleware; use Illuminate\Http\Request; use Symfony\Component\HttpFoundation\Response; class Authenticate { protected function redirectTo($request) { goto U00kp; vvute: return route("\x6c\x6f\147\151\x6e"); goto VqALW; U00kp: if ($request->expectsJson()) { goto KL9aV; } goto vvute; VqALW: KL9aV: goto YnK5t; YnK5t: } }
