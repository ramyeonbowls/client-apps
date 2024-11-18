<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:21             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Services\Report; use App\Repositories\Report\LibraryOfficerReportRepository; use Carbon\Carbon; use Illuminate\Database\Eloquent\Model; use Illuminate\Database\Query\Builder; use Illuminate\Support\Collection; class LibraryOfficerReportService { private LibraryOfficerReportRepository $officer_repo; protected $client_id = ''; public function __construct() { $this->officer_repo = new LibraryOfficerReportRepository(); $this->client_id = config("\141\160\160\56\x63\154\151\145\156\164\x5f\151\x64", ''); } public function get($filter) { return new Collection($this->officer_repo->get($filter)); } }
