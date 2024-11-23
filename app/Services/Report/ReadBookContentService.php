<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-23 17:36:15             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Services\Report; use App\Repositories\Report\ReadBookContentRepository; use Carbon\Carbon; use Illuminate\Database\Eloquent\Model; use Illuminate\Database\Query\Builder; use Illuminate\Support\Collection; class ReadBookContentService { private ReadBookContentRepository $book_repo; protected $client_id = ''; public function __construct() { $this->book_repo = new ReadBookContentRepository(); $this->client_id = config("\141\160\160\56\143\x6c\151\145\x6e\164\137\x69\144", ''); } public function get($filter) { return new Collection($this->book_repo->get($filter)); } }
