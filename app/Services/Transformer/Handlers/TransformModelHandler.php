<?php

namespace App\Services\Transformer\Handlers;

use Illuminate\Database\Eloquent\Model;

class TransformModelHandler extends TransformHandler
{
    /**
     * @param Model $model
     * @return mixed
     */
    public function handle(Model $model)
    {
        $transformer = $this->factory->getTransformer($model, $this->repository);
        $transformedData = $this->transformData->transformToArrayFromModel($model, $transformer);
        return $transformedData['data'];
    }
}
