<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-23 17:36:14             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Repositories\Transaction; use Carbon\Carbon; use Illuminate\Support\Collection; use Illuminate\Support\Facades\DB; use Illuminate\Support\Facades\Hash; class ApporvalUserRepository { public function get($client_id) : Collection { return DB::table("\x75\x73\x65\x72\163\x20\141\163\40\141")->select("\141\56\x69\144", "\x62\56\x6e\151\153", "\x62\x2e\x70\x68\157\x74\x6f", "\141\56\x6e\x61\x6d\x65", "\141\x2e\x65\x6d\x61\151\154", "\x62\x2e\x70\x68\157\x6e\x65", "\142\x2e\142\151\x72\x74\150\x64\x61\171", "\x61\56\145\155\141\151\154\x5f\166\145\x72\151\x66\151\145\x64\x5f\x61\164", "\x61\x2e\143\x72\145\x61\164\x65\144\137\141\x74")->join("\164\141\x74\x74\x72\137\155\145\155\x62\x65\x72\x20\x61\163\x20\142", function ($join) { $join->on("\x61\x2e\x69\x64", "\x3d", "\142\56\151\x64"); })->where("\x61\56\x63\154\x69\x65\156\164\137\151\144", "\75", $client_id)->where("\x61\x2e\162\x6f\x6c\x65", "\75", "\155\145\155\142\x65\162")->where("\x61\x2e\146\154\x61\x67\x5f\x61\160\x70\162\x6f\x76\145", "\x3d", "\116")->get(); } public function store(array $data, $client_id) : bool { return DB::transaction(function () use($data, $client_id) { goto ZW2nE; ZW2nE: foreach ($data as $key => $value) { $appr = DB::table("\165\163\145\162\163")->where("\151\x64", $value["\x69\x64"])->where("\x63\154\151\145\156\164\x5f\151\x64", $client_id)->update(["\x66\x6c\x61\147\x5f\x61\x70\x70\162\x6f\166\x65" => "\131", "\x75\160\x64\x61\164\x65\144\x5f\141\164" => Carbon::now("\x41\x73\151\x61\x2f\112\x61\x6b\141\162\164\x61")]); jrIPH: } goto O71c1; egc_3: return $appr; goto xlPB3; O71c1: WQeF1: goto egc_3; xlPB3: }); } }
