<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:21             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Services\Web; use App\Repositories\Web\VisitorsRepository; class VisitorsService { protected $VisitorsRepo; public function __construct(VisitorsRepository $VisitorsRepo) { $this->VisitorsRepo = $VisitorsRepo; } public function createVisitor($data) { return $this->VisitorsRepo->createVisitor($data); } public function ReadFitur($data) { return $this->VisitorsRepo->ReadFitur($data); } }
