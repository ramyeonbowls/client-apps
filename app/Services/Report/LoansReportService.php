<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-23 17:36:15             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Services\Report; use App\Repositories\Report\LoansReportRepository; use Carbon\Carbon; use Illuminate\Database\Eloquent\Model; use Illuminate\Database\Query\Builder; use Illuminate\Support\Collection; class LoansReportService { private LoansReportRepository $loans_repo; protected $client_id = ''; public function __construct() { $this->loans_repo = new LoansReportRepository(); $this->client_id = config("\x61\160\x70\x2e\143\154\151\x65\156\x74\x5f\x69\144", ''); } public function get($filter) { return new Collection($this->loans_repo->get($filter)); } }
