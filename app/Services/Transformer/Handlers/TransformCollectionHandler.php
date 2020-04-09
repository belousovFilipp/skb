<?php

namespace App\Services\Transformer\Handlers;

use Illuminate\Support\Collection;

class TransformCollectionHandler extends TransformHandler
{
    /**
     * @param Collection $collection
     * @return array
     */
    public function handle(Collection $collection): array
    {
        $model = $collection->first();
        $transformer = $this->factory->getTransformer($model, $this->repository);
        $transformedData = $this->transformData->transformToArrayFromCollection($collection, $transformer);
        return $transformedData['data'];
    }
}
