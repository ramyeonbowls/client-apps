<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-23 17:36:14             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Http\Middleware; use Closure; use Illuminate\Support\Facades\Auth; class DestroySessionMiddleware { public function handle($request, Closure $next) { goto EFwRP; rsOYq: $user = Auth::user(); goto RV35z; iVPD3: oCAky: goto Z06ey; dMH3o: xo1BD: goto e_FTN; zNslF: return redirect("\x2f"); goto dMH3o; Z06ey: return $next($request); goto SDwvW; IOqeE: $request->session()->invalidate(); goto V3Znv; RV35z: if (!(($user->role == "\x61\144\x6d\x69\156" || $user->role == "\x74\x65\141\x63\150\x65\x72") && $request->path() == "\57")) { goto xo1BD; } goto cy9TK; V3Znv: return redirect("\57\x61\144\155\151\x6e"); goto CZaft; CZaft: AVO8I: goto iVPD3; e_FTN: if (!($user->role == "\155\x65\155\142\145\x72" && $request->path() == "\x61\x64\x6d\151\156")) { goto AVO8I; } goto ZhnVA; cy9TK: Auth::logout(); goto o3IpO; ZhnVA: Auth::logout(); goto IOqeE; o3IpO: $request->session()->invalidate(); goto zNslF; EFwRP: if (!Auth::check()) { goto oCAky; } goto rsOYq; SDwvW: } }
