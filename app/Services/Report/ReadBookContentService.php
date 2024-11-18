<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:21             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Services\Report; use App\Repositories\Report\ReadBookContentRepository; use Carbon\Carbon; use Illuminate\Database\Eloquent\Model; use Illuminate\Database\Query\Builder; use Illuminate\Support\Collection; class ReadBookContentService { private ReadBookContentRepository $book_repo; protected $client_id = ''; public function __construct() { $this->book_repo = new ReadBookContentRepository(); $this->client_id = config("\x61\160\160\x2e\x63\154\151\145\156\164\137\x69\x64", ''); } public function get($filter) { return new Collection($this->book_repo->get($filter)); } }
