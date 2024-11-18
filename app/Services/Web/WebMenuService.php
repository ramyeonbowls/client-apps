<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:21             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Services\Web; use App\Repositories\Web\WebMenuRepository; class WebMenuService { protected $webMenuRepo; public function __construct(WebMenuRepository $webMenuRepo) { $this->webMenuRepo = $webMenuRepo; } public function getAccessControlList($username) { return $this->webMenuRepo->getAccessControlList($username)->map(function ($value) use($username) { return $this->formatNavbar($username, $value); }); } public function formatNavbar($username, $value) { $childs = $this->webMenuRepo->getAccessControlList($username, $value->id)->map(function ($value) use($username) { return $this->formatNavbar($username, $value); })->toArray(); return ["\x70\162\145\166\x69\144" => $value->previd, "\x6d\x65\156\165\x5f\146\156" => $value->menu_fn, "\x6d\145\156\165\137\x6c\151\156\x6b" => $value->menu_link, "\155\x65\x6e\165\137\x6c\x61\x62\x65\154" => $value->menu_label, "\x6d\145\x6e\165\137\144\145\x73\x63" => $value->menu_desc, "\155\x65\156\x75\x5f\x69\143\157\156" => $value->menu_icon, "\143\150\151\x6c\144\x73" => $childs]; } }
