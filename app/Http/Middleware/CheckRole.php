<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:20             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Http\Middleware; use Closure; use Illuminate\Http\Request; class CheckRole { public function handle(Request $request, Closure $next, ...$roles) { goto CHIuL; CHIuL: if (!(!auth()->check() || !in_array(auth()->user()->role, $roles))) { goto xvkzB; } goto BnkVz; BnkVz: return redirect("\x2f\64\x30\x33"); goto AXpsI; AXpsI: xvkzB: goto fz6En; fz6En: return $next($request); goto wQnK4; wQnK4: } }
