<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-23 17:36:15             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Services\Report; use App\Repositories\Report\MemberReportRepository; use Carbon\Carbon; use Illuminate\Database\Eloquent\Model; use Illuminate\Database\Query\Builder; use Illuminate\Support\Collection; class MemberReportService { private MemberReportRepository $book_repo; protected $client_id = ''; public function __construct() { $this->book_repo = new MemberReportRepository(); $this->client_id = config("\x61\x70\x70\56\143\154\x69\145\156\164\x5f\x69\x64", ''); } public function get($filter) { return new Collection($this->book_repo->get($filter)); } }
