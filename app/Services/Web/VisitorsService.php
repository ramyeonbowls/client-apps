<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-23 17:36:15             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Services\Web; use App\Repositories\Web\VisitorsRepository; class VisitorsService { protected $VisitorsRepo; public function __construct(VisitorsRepository $VisitorsRepo) { $this->VisitorsRepo = $VisitorsRepo; } public function createVisitor($data) { return $this->VisitorsRepo->createVisitor($data); } public function ReadFitur($data) { return $this->VisitorsRepo->ReadFitur($data); } }
