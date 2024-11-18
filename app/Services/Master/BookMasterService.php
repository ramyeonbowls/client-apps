<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:21             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Services\Master; use App\Repositories\Master\BookMasterRepository; use Carbon\Carbon; use Illuminate\Database\Eloquent\Model; use Illuminate\Database\Query\Builder; use Illuminate\Support\Collection; class BookMasterService { private BookMasterRepository $book_repo; protected $client_id = ''; public function __construct() { $this->book_repo = new BookMasterRepository(); $this->client_id = config("\x61\x70\160\x2e\143\154\151\x65\x6e\x74\x5f\151\x64", ''); } public function get() { return new Collection($this->book_repo->get($this->client_id)); } }
