<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-23 17:36:15             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Services\Report; use App\Repositories\Report\ReadBookUserRepository; use Carbon\Carbon; use Illuminate\Database\Eloquent\Model; use Illuminate\Database\Query\Builder; use Illuminate\Support\Collection; class ReadBookUserService { private ReadBookUserRepository $book_repo; protected $client_id = ''; public function __construct() { $this->book_repo = new ReadBookUserRepository(); $this->client_id = config("\x61\160\x70\x2e\x63\x6c\151\x65\156\164\137\x69\x64", ''); } public function get($filter) { return new Collection($this->book_repo->get($filter)); } }
