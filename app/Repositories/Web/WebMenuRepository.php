<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:21             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Repositories\Web; use App\Models\Web\WebMenu; use App\Models\Web\WebMenuAcl; class WebMenuRepository { public function getAll() { return WebMenu::sharedLock()->get(); } public function getVisibleOnly() { return WebMenu::sharedLock()->where("\x6d\x65\156\x75\x5f\166\151\x73\151\x62\154\145", 1)->get(); } public function getAccessControlList($username, $parent = 0) { return WebMenu::select("\151\144", "\160\x72\x65\x76\151\x64", "\x6d\145\156\165\x5f\146\x6e", "\155\145\156\x75\x5f\x6c\151\x6e\x6b", "\x6d\145\156\x75\x5f\154\x61\142\145\154", "\x6d\x65\x6e\165\x5f\144\x65\x73\143", "\155\145\156\x75\137\x73\x65\161", "\x6d\145\x6e\x75\137\151\143\157\x6e")->sharedLock()->where("\155\145\x6e\165\137\166\x69\x73\x69\x62\x6c\x65", 1)->where("\x70\162\145\x76\151\x64", $parent)->whereIn("\151\x64", WebMenuAcl::sharedLock()->select("\155\x65\x6e\x75\x5f\151\144")->where("\165\x73\x65\x72\156\x61\155\x65", $username))->orderBy("\155\x65\x6e\x75\x5f\x73\x65\161", "\x41\x53\103")->get(); } public function findWebMenuByParentId($parentId) { return WebMenu::select("\151\144", "\160\x72\x65\x76\x69\x64", "\x6d\145\156\165\137\x66\x6e", "\155\145\x6e\165\137\x6c\151\x6e\153", "\155\145\156\165\x5f\x6c\141\x62\145\x6c", "\x6d\x65\x6e\x75\137\x64\145\x73\x63", "\x6d\x65\156\165\x5f\163\145\161", "\160\x65\x72\x6d\x69\x73\163\151\157\156", "\x6d\145\156\x75\137\x69\143\157\156")->sharedLock()->where("\x6d\145\156\165\137\x76\151\x73\151\142\154\x65", 1)->where("\x70\162\145\x76\151\x64", $parentId)->orderBy("\155\x65\156\165\x5f\163\x65\x71", "\x41\123\x43")->get(); } }
