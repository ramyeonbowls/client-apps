<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:21             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Services\Web; use App\Repositories\Web\WebAccessLogRepository; class WebAccessLogService { protected $webAccessLogRepo; public function __construct(WebAccessLogRepository $webAccessLogRepo) { $this->webAccessLogRepo = $webAccessLogRepo; } public function createAccessLog($data) { goto fJn7I; WKpGo: $this->webAccessLogRepo->updateLeaveDate(); goto bvzeS; bvzeS: return $this->webAccessLogRepo->createAccessLog($data); goto SylR0; fJn7I: $data["\141\x63\143\x65\163\x73\137\x69\x70"] = $data->getClientIp(); goto WKpGo; SylR0: } public function getAclPermission($menuId) { return $this->webAccessLogRepo->getAclPermission($menuId); } }
