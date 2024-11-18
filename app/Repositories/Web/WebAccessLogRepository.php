<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:21             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Repositories\Web; use App\Models\Web\WebMenu; use App\Models\Web\WebMenuAcl; use App\Models\Web\WebAccessLog; use Illuminate\Support\Facades\DB; class WebAccessLogRepository { public function get($filter = array()) { return WebAccessLog::sharedLock()->when(isset($filter["\x75\151\x64"]), function ($query) use($filter) { $query->where("\141\x63\143\x65\x73\163\137\165\x69\x64", $filter["\165\x69\x64"]); })->get(); } public function updateLeaveDate() { $max_accessid = WebAccessLog::where("\155\x65\164\150\x6f\x64", "\x47\105\124")->where("\x61\143\143\x65\x73\x73\x5f\165\151\x64", auth()->user()->email)->max("\151\x64"); return DB::transaction(function () use($max_accessid) { WebAccessLog::where("\x69\x64", $max_accessid)->update(["\x6c\145\141\x76\x65\137\x64\x61\x74\145" => now()->toDateTimeString()]); }); } public function createAccessLog($data) { return DB::transaction(function () use($data) { goto R2VY1; oxu6A: $qstring = explode("\x3f", $data["\146\x75\154\x6c\137\165\162\154"]); goto I809n; wBg8G: $accessLog->access_mid = $menu->id; goto TVmwz; BJjc5: $accessLog->access_uid = auth()->user()->email; goto gGrZZ; k4zPV: $accessLog->access_ip = $data["\x61\x63\x63\145\163\x73\x5f\x69\160"]; goto BJjc5; gGrZZ: $accessLog->save(); goto yhn5l; tnxql: $accessLog->access_qstring = $qstring; goto k4zPV; I809n: $qstring = count($qstring) < 2 ? "\x6d\145\156\165\137\x66\x6e\75" . $data["\x6e\141\155\145"] : (strpos($qstring[1], "\155\x65\156\x75\137\146\156") === false ? "\x6d\x65\156\165\137\146\156\75" . $data["\156\x61\x6d\x65"] . "\x26" . $qstring[1] : $qstring[1]); goto z40uc; R2VY1: $menu = WebMenu::where("\155\145\x6e\165\137\x66\x6e", $data["\156\x61\155\x65"])->first(); goto oxu6A; z40uc: $accessLog = new WebAccessLog(); goto wBg8G; TVmwz: $accessLog->access_url = url($data["\x75\x72\x6c"]); goto tnxql; yhn5l: return $accessLog->fresh(); goto wtHlf; wtHlf: }); } public function getAclPermission($menuId) { goto gEJQV; uMoMq: $web_menu = $web_menu->first(); goto wrWRE; wrWRE: $permission = WebMenuAcl::sharedLock()->where("\165\x73\x65\x72\x6e\x61\155\x65", auth()->user()->email)->where("\x6d\x65\156\165\x5f\x69\x64", $web_menu->id)->first(); goto slYrI; gEJQV: $web_menu = WebMenu::select(["\x69\x64", "\x6d\x65\x6e\165\137\x66\156", "\x6d\x65\156\x75\x5f\x6c\141\x62\x65\154", "\x6d\x65\156\x75\x5f\144\x65\x73\143"])->where("\x6d\x65\156\x75\x5f\x76\x69\163\151\142\154\x65", 1)->where("\x6d\145\156\165\137\x66\x6e", $menuId)->whereIn("\x69\144", WebMenuAcl::sharedLock()->select("\x6d\x65\x6e\x75\x5f\x69\144")->where("\x75\x73\x65\162\156\141\155\145", auth()->user()->email)); goto TbdK4; slYrI: return ["\155\x65\x6e\x75\137\146\x6e" => $web_menu->menu_fn, "\x6d\x65\x6e\165\137\154\x61\x62\145\154" => $web_menu->menu_label, "\x6d\145\156\x75\x5f\x64\x65\163\143" => $web_menu->menu_desc, "\160\145\162\x6d\x69\x73\163\151\x6f\156" => ["\x63\x72\145\x61\x74\145" => (bool) $permission->create_permission, "\162\x65\141\x64" => (bool) $permission->read_permission, "\165\x70\144\141\164\x65" => (bool) $permission->update_permission, "\144\145\154\145\164\x65" => (bool) $permission->delete_permission]]; goto aHc2Q; TbdK4: if (!$web_menu->count()) { goto F2bjG; } goto uMoMq; VNOYI: return null; goto dr1YI; aHc2Q: F2bjG: goto VNOYI; dr1YI: } }
