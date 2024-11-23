<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-23 17:36:14             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Services\Master; use App\Repositories\Master\BookMasterRepository; use Carbon\Carbon; use Illuminate\Database\Eloquent\Model; use Illuminate\Database\Query\Builder; use Illuminate\Support\Collection; class BookMasterService { private BookMasterRepository $book_repo; protected $client_id = ''; public function __construct() { $this->book_repo = new BookMasterRepository(); $this->client_id = config("\141\160\x70\56\x63\154\x69\145\156\164\137\151\144", ''); } public function get() { return new Collection($this->book_repo->get($this->client_id)); } }
