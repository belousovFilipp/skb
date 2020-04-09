<?php

namespace App\Services\Transformer;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Services\Transformer\Handlers\TransformModelHandler;
use App\Services\Transformer\Handlers\TransformCollectionHandler;

class TransformerService
{
    /** @var TransformModelHandler */
    private $transformModelHandler;

    /** @var TransformCollectionHandler */
    private $transformCollectionHandler;

    public function __construct(
        TransformModelHandler $transformModelHandler,
        TransformCollectionHandler $transformCollectionHandler
    )
    {
        $this->transformModelHandler = $transformModelHandler;
        $this->transformCollectionHandler = $transformCollectionHandler;
    }

    /**
     * @param Model $model
     * @return array
     */
    public function transformModel(Model $model): array
    {
        return $this->transformModelHandler->handle($model);
    }

    /**
     * @param Collection $collection
     * @return array
     */
    public function transformCollection(Collection $collection): array
    {
        return $this->transformCollectionHandler->handle($collection);
    }
}
