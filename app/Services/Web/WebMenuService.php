<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-23 17:36:15             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Services\Web; use App\Repositories\Web\WebMenuRepository; class WebMenuService { protected $webMenuRepo; public function __construct(WebMenuRepository $webMenuRepo) { $this->webMenuRepo = $webMenuRepo; } public function getAccessControlList($username) { return $this->webMenuRepo->getAccessControlList($username)->map(function ($value) use($username) { return $this->formatNavbar($username, $value); }); } public function formatNavbar($username, $value) { $childs = $this->webMenuRepo->getAccessControlList($username, $value->id)->map(function ($value) use($username) { return $this->formatNavbar($username, $value); })->toArray(); return ["\160\x72\145\166\151\x64" => $value->previd, "\x6d\x65\x6e\165\137\x66\156" => $value->menu_fn, "\155\145\x6e\x75\x5f\x6c\x69\x6e\x6b" => $value->menu_link, "\x6d\x65\156\165\x5f\x6c\141\x62\145\154" => $value->menu_label, "\155\x65\156\x75\x5f\x64\145\163\143" => $value->menu_desc, "\x6d\145\156\165\x5f\151\x63\x6f\x6e" => $value->menu_icon, "\143\150\x69\x6c\x64\x73" => $childs]; } }
