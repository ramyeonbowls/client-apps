<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-23 17:36:15             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Services\Report; use App\Repositories\Report\ReadBookRepository; use Carbon\Carbon; use Illuminate\Database\Eloquent\Model; use Illuminate\Database\Query\Builder; use Illuminate\Support\Collection; class ReadBookService { private ReadBookRepository $book_repo; protected $client_id = ''; public function __construct() { $this->book_repo = new ReadBookRepository(); $this->client_id = config("\141\160\160\56\143\x6c\x69\145\156\164\x5f\151\144", ''); } public function get($filter) { return new Collection($this->book_repo->get($filter)); } }
