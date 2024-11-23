<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-23 17:36:15             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Services\Report; use App\Repositories\Report\LibraryOfficerReportRepository; use Carbon\Carbon; use Illuminate\Database\Eloquent\Model; use Illuminate\Database\Query\Builder; use Illuminate\Support\Collection; class LibraryOfficerReportService { private LibraryOfficerReportRepository $officer_repo; protected $client_id = ''; public function __construct() { $this->officer_repo = new LibraryOfficerReportRepository(); $this->client_id = config("\141\160\160\56\x63\x6c\151\x65\x6e\164\x5f\151\x64", ''); } public function get($filter) { return new Collection($this->officer_repo->get($filter)); } }
