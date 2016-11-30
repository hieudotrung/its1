<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Database\Eloquent\Model;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function storeData($service, array $data)
    {
    	$service->store($data);
    }

    public function updateData($service, Model $model, array $data)
    {
    	$service->update($model, $data);
    }

    public function deleteData($service, Model $model)
    {
    	$service->delete($model);
    }
}
