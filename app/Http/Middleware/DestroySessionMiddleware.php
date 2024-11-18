<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:20             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Http\Middleware; use Closure; use Illuminate\Support\Facades\Auth; class DestroySessionMiddleware { public function handle($request, Closure $next) { goto oyA06; oyA06: if (!Auth::check()) { goto Cpo9P; } goto ehMaj; iXq8n: return redirect("\57"); goto tjwZb; n2uwv: if (!($user->role == "\155\145\x6d\x62\145\162" && $request->path() == "\141\x64\155\151\x6e")) { goto A1SLj; } goto ER5ty; D4jiE: return redirect("\x2f\x61\144\155\x69\156"); goto fmo3V; AA8yq: $request->session()->invalidate(); goto iXq8n; fmo3V: A1SLj: goto WPuZT; zYGyq: if (!(($user->role == "\x61\144\x6d\x69\x6e" || $user->role == "\164\x65\141\143\150\x65\x72") && $request->path() == "\x2f")) { goto YaWq6; } goto tPr1_; ehMaj: $user = Auth::user(); goto zYGyq; ER5ty: Auth::logout(); goto Qf9ZW; WPuZT: Cpo9P: goto oj3h8; oj3h8: return $next($request); goto w0j0V; tjwZb: YaWq6: goto n2uwv; Qf9ZW: $request->session()->invalidate(); goto D4jiE; tPr1_: Auth::logout(); goto AA8yq; w0j0V: } }
