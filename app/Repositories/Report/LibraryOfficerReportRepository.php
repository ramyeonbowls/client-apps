<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:20             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Repositories\Report; use App\Models\IconMenu\IconMenu; use Illuminate\Support\Facades\DB; use Illuminate\Support\Collection; class LibraryOfficerReportRepository { public function get($filter) : Collection { goto qCn8e; lGmK3: return DB::table("\x74\154\151\x62\162\141\x72\171\x5f\x6f\146\x66\151\x63\145\162\x73\x20\x61\163\40\x61")->select("\142\x2e\151\156\x73\x74\x61\x6e\163\x69\x5f\156\141\155\x65\x20\141\x73\x20\x77\x6c\137\x6e\x61\x6d\145", "\x62\56\160\162\157\166\151\x6e\163\x69\137\151\x64", "\x63\56\x70\162\157\166\x69\156\x73\x69\x5f\x6e\141\x6d\x65", "\x62\56\153\x61\142\x75\x70\x61\x74\x65\x6e\137\151\x64", "\144\56\153\141\x62\x75\x70\141\x74\145\x6e\137\156\141\155\145", "\x61\x2e\x6e\151\x70", "\141\x2e\156\141\x6d\x65", "\141\x2e\160\x6f\163\151\x74\151\x6f\x6e")->join("\x74\143\x6c\x69\x65\x6e\x74\40\x61\163\40\x62", function ($join) { $join->on("\141\x2e\x63\x6c\x69\145\x6e\164\x5f\x69\144", "\x3d", "\x62\56\143\154\x69\145\156\164\x5f\151\x64"); })->join("\x74\x70\162\157\166\151\156\x73\151\40\x61\163\x20\143", function ($join) { $join->on("\142\56\160\162\157\166\151\156\x73\x69\137\x69\x64", "\x3d", "\x63\56\x70\162\x6f\x76\151\x6e\x73\x69\x5f\151\x64"); })->join("\164\x6b\x61\142\165\160\141\164\145\156\x20\x61\163\x20\144", function ($join) { $join->on("\142\x2e\x6b\141\142\165\x70\x61\164\145\156\137\151\144", "\x3d", "\144\56\x6b\141\142\165\x70\141\x74\145\x6e\x5f\151\144"); })->where("\141\56\143\x6c\151\x65\x6e\x74\x5f\151\x64", "\x3d", $client_id)->where("\x62\56\x70\x72\x6f\166\151\156\163\x69\137\x69\x64", "\75", $PROVINSI)->where("\142\x2e\153\x61\x62\165\160\x61\x74\145\156\137\151\144", "\75", $KABUPATEN)->sharedLock()->get(); goto XjO7F; sa1ZU: extract($filter); goto lGmK3; qCn8e: $client_id = $this->getClientID($filter); goto sa1ZU; XjO7F: } private function getClientID($filter) { goto ckkab; ckkab: extract($filter); goto M8aX_; rKrN_: return $query[0]->client_id ?? ''; goto wHy3k; M8aX_: $query = DB::table("\x74\143\x6c\x69\x65\x6e\x74\40\x61\163\x20\x61")->select("\x61\x2e\143\154\151\x65\x6e\x74\137\151\144")->where("\x61\56\x70\162\157\166\151\156\x73\x69\x5f\x69\144", "\x3d", $PROVINSI)->where("\x61\56\x6b\141\x62\165\x70\141\x74\145\156\137\151\x64", "\x3d", $KABUPATEN)->where("\x61\x2e\151\156\163\x74\141\x6e\x73\151\x5f\x6e\x61\155\x65", "\x3d", $WL)->sharedLock()->get(); goto rKrN_; wHy3k: } }
