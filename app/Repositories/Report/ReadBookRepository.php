<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:20             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Repositories\Report; use App\Models\IconMenu\IconMenu; use Illuminate\Support\Facades\DB; use Illuminate\Support\Collection; class ReadBookRepository { public function get($filter) : Collection { goto AnT3Z; AnT3Z: $client_id = $this->getClientID($filter); goto Oqgfg; Oqgfg: extract($filter); goto C7lUE; C7lUE: return DB::table("\x74\x74\162\x78\x5f\162\x65\x61\x64\40\141\163\40\141")->select("\x62\56\x70\x72\x6f\166\151\x6e\163\x69\x5f\x69\x64", "\x63\56\x70\162\x6f\166\x69\156\x73\151\137\x6e\x61\x6d\145", "\142\56\x6b\141\142\165\160\141\x74\145\156\137\x69\x64", "\x64\x2e\153\141\142\x75\160\x61\164\x65\x6e\137\x6e\x61\155\145", DB::raw("\103\x4f\x55\x4e\124\50\x44\111\123\x54\111\x4e\x43\124\40\141\56\x75\163\145\162\137\151\x64\51\40\101\x53\x20\160\145\x6d\142\x61\x63\141"), DB::raw("\123\105\x43\137\x54\117\x5f\124\x49\115\105\50\x53\125\x4d\50\x54\111\x4d\105\123\124\x41\115\x50\104\111\106\106\50\x53\105\103\x4f\116\104\54\40\x61\x2e\163\x74\x61\x72\164\x5f\x72\145\x61\144\x2c\40\141\x2e\145\x6e\144\137\162\x65\x61\144\51\x29\x29\x20\101\123\x20\x64\x75\162\x61\x73\x69"), DB::raw("\103\x4f\x4e\103\x41\x54\50\xa\40\40\x20\x20\40\x20\x20\x20\40\x20\x20\x20\40\40\x20\x20\40\x20\40\x20\106\114\117\117\122\50\123\125\115\x28\124\111\115\105\x53\x54\101\115\x50\104\x49\x46\x46\50\123\x45\103\x4f\116\104\x2c\x20\141\x2e\163\164\141\x72\x74\x5f\x72\145\141\x64\54\40\141\56\x65\156\x64\137\162\145\x61\x64\x29\x29\40\x2f\40\x33\66\60\x30\x29\54\x20\x27\x20\x6a\141\x6d\x20\x27\54\xa\x20\40\x20\x20\x20\40\x20\x20\x20\40\x20\x20\x20\40\40\40\40\40\40\40\106\x4c\117\x4f\x52\50\x28\123\x55\x4d\50\x54\x49\115\105\123\124\x41\x4d\120\104\111\x46\106\x28\123\105\x43\x4f\116\104\54\x20\141\56\163\164\141\x72\164\137\162\x65\x61\x64\x2c\x20\x61\x2e\x65\156\x64\137\x72\145\x61\x64\51\x29\x20\x25\x20\x33\66\60\60\x29\x20\x2f\40\x36\60\x29\54\40\47\40\155\x65\x6e\151\164\x20\47\54\12\40\x20\40\x20\40\40\40\x20\x20\40\x20\x20\40\40\40\x20\x20\40\40\40\x28\123\x55\115\x28\124\111\115\105\x53\x54\101\115\120\104\111\x46\106\50\x53\105\x43\x4f\x4e\104\54\x20\141\x2e\x73\x74\x61\162\164\x5f\x72\145\x61\x64\54\40\x61\x2e\145\x6e\144\137\162\x65\141\x64\51\x29\x20\x25\x20\x36\x30\x29\x2c\x20\x27\x20\144\145\164\151\153\x27\xa\x20\40\x20\40\x20\x20\x20\40\40\x20\40\40\x20\40\40\40\x29\x20\101\123\40\x6a\141\x6d"), "\142\56\151\156\163\164\x61\x6e\163\x69\137\156\141\155\x65\x20\x61\163\40\167\x6c\x5f\x6e\141\x6d\x65")->join("\164\143\x6c\x69\x65\156\x74\40\141\x73\x20\x62", function ($join) { $join->on("\141\56\143\x6c\x69\x65\x6e\x74\137\x69\x64", "\75", "\142\x2e\x63\154\x69\x65\x6e\164\137\x69\144"); })->join("\x74\160\162\x6f\166\x69\x6e\x73\x69\x20\141\163\40\143", function ($join) { $join->on("\142\56\x70\x72\x6f\x76\x69\156\163\x69\137\x69\144", "\x3d", "\x63\x2e\x70\x72\x6f\x76\151\x6e\x73\151\x5f\151\x64"); })->join("\164\153\x61\x62\x75\x70\x61\x74\145\x6e\x20\141\163\40\x64", function ($join) { $join->on("\x62\56\x6b\x61\142\165\160\x61\164\x65\156\137\151\x64", "\x3d", "\144\x2e\x6b\x61\142\165\x70\141\164\145\156\x5f\x69\x64"); })->join("\165\163\145\162\163\x20\x61\163\x20\x65", function ($join) { $join->on("\141\56\165\x73\x65\162\x5f\151\x64", "\x3d", "\x65\x2e\151\x64")->on("\x61\56\x63\154\x69\x65\156\x74\x5f\151\x64", "\x3d", "\145\56\x63\x6c\151\145\x6e\164\137\151\144"); })->where("\x61\x2e\143\154\x69\x65\x6e\164\x5f\x69\x64", "\75", $client_id)->where("\x62\56\x70\x72\157\x76\x69\x6e\x73\151\x5f\151\x64", "\x3d", $PROVINSI)->where("\x62\56\153\x61\x62\x75\160\x61\x74\x65\x6e\137\x69\x64", "\x3d", $KABUPATEN)->where("\x61\x2e\x66\x6c\141\x67\x5f\x65\156\x64", "\x3d", "\x59")->when(!empty($END_DATE), function ($query) use($START_DATE, $END_DATE) { return $query->whereBetween(DB::raw("\104\x41\x54\105\50\x61\x2e\x63\x72\145\x61\164\145\x64\137\x61\x74\x29"), [$START_DATE, $END_DATE]); }, function ($query) use($START_DATE) { return $query->where(DB::raw("\x44\x41\124\105\50\x61\56\143\x72\x65\141\164\x65\144\x5f\141\x74\51"), "\75", $START_DATE); })->groupBy("\142\56\x70\162\x6f\166\x69\x6e\163\151\x5f\x69\x64", "\x63\x2e\x70\x72\157\x76\151\156\163\x69\137\156\141\155\145", "\142\x2e\x6b\141\x62\x75\x70\141\x74\x65\156\x5f\x69\x64", "\144\56\x6b\141\142\x75\x70\x61\164\x65\156\137\156\141\x6d\x65", "\142\56\151\156\x73\164\141\156\x73\151\137\156\x61\x6d\145")->sharedLock()->get(); goto k3Agm; k3Agm: } private function getClientID($filter) { goto jKRjr; JPDAl: $query = DB::table("\164\143\x6c\151\x65\156\x74\40\x61\x73\x20\141")->select("\x61\x2e\143\x6c\151\145\156\x74\x5f\x69\144")->where("\x61\56\x70\x72\x6f\166\151\x6e\x73\x69\x5f\151\x64", "\75", $PROVINSI)->where("\141\x2e\x6b\141\142\x75\160\141\164\145\156\x5f\x69\x64", "\75", $KABUPATEN)->where("\141\x2e\151\156\x73\x74\x61\x6e\x73\x69\x5f\156\141\155\x65", "\75", $WL)->sharedLock()->get(); goto Ui_Vb; jKRjr: extract($filter); goto JPDAl; Ui_Vb: return $query[0]->client_id ?? ''; goto O_vLP; O_vLP: } }
