<?php

namespace App\Services\Transformer\Factories;

use Illuminate\Database\Eloquent\Model;
use App\Services\Transformer\Repositories\TransformRepositoryInterface;
use App\Services\Transformer\Transformers\Transformer;

class TransformerFactory
{
    /**
     * @param \Illuminate\Database\Eloquent\Model $model
     * @return Transformer|null
     */
    public function getTransformer(Model $model, TransformRepositoryInterface $repository): Transformer
    {
        foreach ($repository->getTransformers() as $modelTransformer => $transformer) {
            if ($model instanceof $modelTransformer) {
                return new $transformer;
            }
        }
        $transformer = $repository->getDefaultTransformer();

        return new $transformer;
    }

}
