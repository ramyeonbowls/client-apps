<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-23 17:36:14             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Http\Middleware; use Closure; use Illuminate\Auth\Middleware\Authenticate as Middleware; use Illuminate\Http\Request; use Symfony\Component\HttpFoundation\Response; class Authenticate { protected function redirectTo($request) { goto Dk1iv; G4bUU: BN0V5: goto cUUXj; Dk1iv: if ($request->expectsJson()) { goto BN0V5; } goto wM5nv; wM5nv: return route("\154\157\x67\151\x6e"); goto G4bUU; cUUXj: } }
