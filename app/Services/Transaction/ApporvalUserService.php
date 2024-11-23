<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-23 17:36:15             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Services\Transaction; use App\Repositories\Transaction\ApporvalUserRepository; use Carbon\Carbon; use Illuminate\Database\Eloquent\Model; use Illuminate\Database\Query\Builder; use Illuminate\Support\Collection; class ApporvalUserService { private ApporvalUserRepository $user_repo; public function __construct() { $this->user_repo = new ApporvalUserRepository(); $this->client_id = config("\141\160\x70\x2e\x63\x6c\x69\145\x6e\164\x5f\151\144", ''); } public function get() : Collection { return new Collection($this->user_repo->get($this->client_id)); } public function store(array $data) : bool { return $this->user_repo->store($data, $this->client_id); } }
