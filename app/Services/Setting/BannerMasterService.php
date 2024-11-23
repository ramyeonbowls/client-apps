<?php
/*   __________________________________________________
    |  Obfuscated by Tarmun - Php Obfuscator  2.0.14  |
    |              on 2024-11-23 17:36:15             |
    |                                                 |
    |_________________________________________________|
*/
 namespace App\Services\Setting; use App\Repositories\Setting\BannerMasterRepository; use Carbon\Carbon; use Illuminate\Database\Eloquent\Model; use Illuminate\Database\Query\Builder; use Illuminate\Support\Collection; class BannerMasterService { private BannerMasterRepository $banner_repo; protected $client_id = ''; public function __construct() { $this->banner_repo = new BannerMasterRepository(); $this->client_id = config("\141\x70\x70\56\x63\x6c\151\x65\x6e\x74\137\151\x64", ''); } public function get(array $filter = []) : Collection { return new Collection($this->banner_repo->get($filter, $this->client_id)); } public function store(object $data) : bool { goto djWY_; M7Iet: return $this->banner_repo->store($data, $this->client_id); goto pzOCL; IUwHp: $username = auth()->user()->email; goto tZUs1; LISeX: $data->create_date = $datetime_now; goto uVQmJ; djWY_: $datetime_now = Carbon::now("\x41\x73\151\x61\x2f\112\141\153\x61\x72\x74\141"); goto IUwHp; ah67K: $data->modified_by = $username; goto LISeX; uVQmJ: $data->modified_date = $datetime_now; goto M7Iet; tZUs1: $data->create_by = $username; goto ah67K; pzOCL: } public function update(object $data, string $id) : bool { goto rrDjF; ulvYZ: $username = auth()->user()->email; goto ks3y2; kOSB0: $data->modified_by = $username; goto BDNCa; cY1Is: return $this->banner_repo->update($data, $id, $this->client_id); goto H1687; ks3y2: $data->file = $data->file ?? $data->current_file; goto kOSB0; BDNCa: $data->modified_date = $datetime_now; goto cY1Is; rrDjF: $datetime_now = Carbon::now("\101\x73\x69\x61\57\x4a\141\153\x61\x72\164\x61"); goto ulvYZ; H1687: } public function delete(string $id) { return $this->banner_repo->delete($id, $this->client_id); } }
