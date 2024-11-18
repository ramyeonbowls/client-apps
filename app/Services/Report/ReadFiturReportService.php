<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:21             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Services\Report; use App\Repositories\Report\ReadFiturReportRepository; use Carbon\Carbon; use Illuminate\Database\Eloquent\Model; use Illuminate\Database\Query\Builder; use Illuminate\Support\Collection; class ReadFiturReportService { private ReadFiturReportRepository $ReadFitur_repo; protected $client_id = ''; public function __construct() { $this->ReadFitur_repo = new ReadFiturReportRepository(); $this->client_id = config("\141\160\160\56\x63\x6c\x69\145\x6e\164\x5f\151\144", ''); } public function get($filter) { return new Collection($this->ReadFitur_repo->get($filter)); } }
