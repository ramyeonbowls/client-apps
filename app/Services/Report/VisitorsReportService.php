<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-23 17:36:15             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Services\Report; use App\Repositories\Report\VisitorsReportRepository; use Carbon\Carbon; use Illuminate\Database\Eloquent\Model; use Illuminate\Database\Query\Builder; use Illuminate\Support\Collection; class VisitorsReportService { private VisitorsReportRepository $visitors_repo; protected $client_id = ''; public function __construct() { $this->visitors_repo = new VisitorsReportRepository(); $this->client_id = config("\x61\160\160\x2e\143\154\x69\x65\156\164\x5f\x69\144", ''); } public function get($filter) { return new Collection($this->visitors_repo->get($filter)); } }
