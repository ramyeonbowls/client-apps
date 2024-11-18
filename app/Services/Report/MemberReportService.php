<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:21             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Services\Report; use App\Repositories\Report\MemberReportRepository; use Carbon\Carbon; use Illuminate\Database\Eloquent\Model; use Illuminate\Database\Query\Builder; use Illuminate\Support\Collection; class MemberReportService { private MemberReportRepository $book_repo; protected $client_id = ''; public function __construct() { $this->book_repo = new MemberReportRepository(); $this->client_id = config("\x61\160\160\x2e\x63\154\x69\x65\x6e\164\137\151\x64", ''); } public function get($filter) { return new Collection($this->book_repo->get($filter)); } }
