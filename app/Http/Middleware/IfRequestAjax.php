<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-23 17:36:14             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Http\Middleware; use Closure; use Illuminate\Http\Request; class IfRequestAjax { public function handle(Request $request, Closure $next) { goto To731; cgn4B: return $next($request); goto gwuUR; To731: if ($request->ajax()) { goto UO8DO; } goto ZTuQi; vNBby: UO8DO: goto cgn4B; ZTuQi: abort(404); goto vNBby; gwuUR: } }
