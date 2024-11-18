<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-18 10:11:21             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Services\Transaction; use App\Repositories\Transaction\ApporvalUserRepository; use Carbon\Carbon; use Illuminate\Database\Eloquent\Model; use Illuminate\Database\Query\Builder; use Illuminate\Support\Collection; class ApporvalUserService { private ApporvalUserRepository $user_repo; public function __construct() { $this->user_repo = new ApporvalUserRepository(); $this->client_id = config("\x61\x70\160\56\x63\154\x69\x65\x6e\164\137\151\144", ''); } public function get() : Collection { return new Collection($this->user_repo->get($this->client_id)); } public function store(array $data) : bool { return $this->user_repo->store($data, $this->client_id); } }
