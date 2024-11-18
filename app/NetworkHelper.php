<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:20             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App; use Illuminate\Support\Facades\Http; class NetworkHelper { public static function hasInternetConnection() : bool { try { $response = Http::timeout(5)->get("\150\x74\164\x70\x73\72\57\57\x64\x6e\x73\56\147\x6f\157\147\x6c\145\57\162\145\163\157\x6c\166\145"); return $response->successful(); } catch (\Exception $e) { return false; } } }
