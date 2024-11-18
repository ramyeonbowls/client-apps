<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:20             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Http\Middleware; use Closure; use Illuminate\Http\Request; use Symfony\Component\HttpFoundation\Response; class DirectRole { public function handle(Request $request, Closure $next) : Response { goto rpC5P; rpC5P: if (!(auth()->check() && (auth()->user()->role === "\141\x64\155\151\x6e" || auth()->user()->role === "\164\145\141\x63\x68\x65\162"))) { goto eRwVU; } goto lgOZN; D97Mj: eRwVU: goto Vqgir; Vqgir: return $next($request); goto qPsFo; lgOZN: return response()->view("\x68\157\155\x65"); goto D97Mj; qPsFo: } }
