<?php

namespace App\Services\Setting;

use App\Repositories\Setting\TitikFokusMasterRepository;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;

class TitikFokusMasterService 
{
	private TitikFokusMasterRepository $TitikFokus_repo;

    protected $client_id = '';
    public function __construct()
    {
        $this->TitikFokus_repo = new TitikFokusMasterRepository();
        $this->client_id = config('app.client_id', '');
    }

    /**
     * @param array $filter
     * @return Collection
     */
    public function get(array $filter = []): Collection
    {
        return new Collection($this->TitikFokus_repo->get($filter, $this->client_id));
    }

    /**
     * @param object $data
     * @return bool
     */
    public function store(object $data): bool
    {
        $datetime_now = Carbon::now("Asia/Jakarta");
        $username = auth()->user()->email;

        $data->create_by        = $username;
        $data->create_date      = $datetime_now;
        $data->flag_aktif       = $data->flag_aktif=='true' ? 'Y' : 'N';

        return $this->TitikFokus_repo->store($data, $this->client_id);
    }

     /**
     * @param object $data
     * @param string $id
     * @return bool
     */
    public function update(object $data, string $id): bool
    {
        $datetime_now = Carbon::now("Asia/Jakarta");
        $username = auth()->user()->email;

        $data->file = $data->file ?? $data->current_file;

        $data->modified_by 		= $username;
        $data->modified_date 	= $datetime_now;
        $data->flag_aktif       = $data->flag_aktif=='true' ? 'Y' : 'N';

        return $this->TitikFokus_repo->update($data, $id, $this->client_id);
    }

    /**
     * @param string $id
     * @return mixed
     */
    public function delete(string $id)
    {
        return $this->TitikFokus_repo->delete($id, $this->client_id);
    }
}