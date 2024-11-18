<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:21             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Services\Report; use App\Repositories\Report\ReadBookUserRepository; use Carbon\Carbon; use Illuminate\Database\Eloquent\Model; use Illuminate\Database\Query\Builder; use Illuminate\Support\Collection; class ReadBookUserService { private ReadBookUserRepository $book_repo; protected $client_id = ''; public function __construct() { $this->book_repo = new ReadBookUserRepository(); $this->client_id = config("\141\160\x70\x2e\143\154\151\145\x6e\x74\x5f\x69\144", ''); } public function get($filter) { return new Collection($this->book_repo->get($filter)); } }
