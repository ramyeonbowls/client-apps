<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:20             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Http\Middleware; use Closure; use Illuminate\Http\Request; class IfRequestAjax { public function handle(Request $request, Closure $next) { goto yiAME; nJRlg: t0m5s: goto YdWiG; yiAME: if ($request->ajax()) { goto t0m5s; } goto vBfYm; YdWiG: return $next($request); goto z7h4Z; vBfYm: abort(404); goto nJRlg; z7h4Z: } }
