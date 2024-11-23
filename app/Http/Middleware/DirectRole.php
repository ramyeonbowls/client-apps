<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-23 17:36:14             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Http\Middleware; use Closure; use Illuminate\Http\Request; use Symfony\Component\HttpFoundation\Response; class DirectRole { public function handle(Request $request, Closure $next) : Response { goto xKTyD; XCenC: return response()->view("\x68\x6f\x6d\x65"); goto pINuc; xKTyD: if (!(auth()->check() && (auth()->user()->role === "\x61\144\155\151\x6e" || auth()->user()->role === "\x74\145\141\x63\x68\145\x72"))) { goto xlIng; } goto XCenC; pINuc: xlIng: goto aR1oH; aR1oH: return $next($request); goto Lt3cH; Lt3cH: } }
