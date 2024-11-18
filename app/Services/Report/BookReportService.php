<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:21             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Services\Report; use App\Repositories\Report\BookReportRepository; use Carbon\Carbon; use Illuminate\Database\Eloquent\Model; use Illuminate\Database\Query\Builder; use Illuminate\Support\Collection; class BookReportService { private BookReportRepository $book_repo; protected $client_id = ''; public function __construct() { $this->book_repo = new BookReportRepository(); $this->client_id = config("\141\x70\160\x2e\x63\x6c\151\145\x6e\x74\x5f\x69\x64", ''); } public function get($filter) { return new Collection($this->book_repo->get($filter)); } }
