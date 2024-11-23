<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-23 17:36:15             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Services\Web; use App\Repositories\Web\WebAccessLogRepository; class WebAccessLogService { protected $webAccessLogRepo; public function __construct(WebAccessLogRepository $webAccessLogRepo) { $this->webAccessLogRepo = $webAccessLogRepo; } public function createAccessLog($data) { goto lILWG; lILWG: $data["\x61\x63\143\x65\x73\163\x5f\151\160"] = $data->getClientIp(); goto tg2Gq; tg2Gq: $this->webAccessLogRepo->updateLeaveDate(); goto ngYvv; ngYvv: return $this->webAccessLogRepo->createAccessLog($data); goto m2nFe; m2nFe: } public function getAclPermission($menuId) { return $this->webAccessLogRepo->getAclPermission($menuId); } }
