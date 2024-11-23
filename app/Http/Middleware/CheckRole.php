<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-23 17:36:14             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Http\Middleware; use Closure; use Illuminate\Http\Request; class CheckRole { public function handle(Request $request, Closure $next, ...$roles) { goto j_fjD; O2Dx7: cbLTn: goto z0PcR; j_fjD: if (!(!auth()->check() || !in_array(auth()->user()->role, $roles))) { goto cbLTn; } goto C8rKd; z0PcR: return $next($request); goto vAm9N; C8rKd: return redirect("\x2f\x34\60\x33"); goto O2Dx7; vAm9N: } }
