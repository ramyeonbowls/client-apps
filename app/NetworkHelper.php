<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-23 17:36:14             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App; use Illuminate\Support\Facades\Http; class NetworkHelper { public static function hasInternetConnection() : bool { try { $response = Http::timeout(5)->get("\x68\x74\164\x70\x73\x3a\x2f\x2f\144\x6e\x73\56\x67\157\157\x67\154\x65\x2f\162\145\163\157\154\166\145"); return $response->successful(); } catch (\Exception $e) { return false; } } }
