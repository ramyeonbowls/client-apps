<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:21             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Services\Report; use App\Repositories\Report\VisitorsReportRepository; use Carbon\Carbon; use Illuminate\Database\Eloquent\Model; use Illuminate\Database\Query\Builder; use Illuminate\Support\Collection; class VisitorsReportService { private VisitorsReportRepository $visitors_repo; protected $client_id = ''; public function __construct() { $this->visitors_repo = new VisitorsReportRepository(); $this->client_id = config("\141\x70\x70\56\x63\x6c\151\x65\x6e\164\x5f\x69\144", ''); } public function get($filter) { return new Collection($this->visitors_repo->get($filter)); } }
