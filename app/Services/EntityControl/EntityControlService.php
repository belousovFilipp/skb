<?php

namespace App\Services\EntityControl;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class EntityControlService
{
    public function checkModel(?Model $model)
    {
        if($model instanceof Model){
            return $model;
        }
        throw new ModelNotFoundException(__('apiResponse.model-not-found'));
    }
}
