<?php


namespace App\Services\Transformer\Transformations;


use Illuminate\Database\Eloquent\Model;
use App\Services\Transformer\Transformers\Transformer;
use Illuminate\Support\Collection;
use Spatie\Fractal\Fractal;

class FractalTransformData
{
    /**
     * @param Collection $collection
     * @param Transformer $transformer
     * @return array
     */
    public function transformToArrayFromCollection(Collection $collection, Transformer $transformer): array
    {
        return $this->transformation($collection, $transformer)->toArray();
    }

    /**
     * @param Model $model
     * @param Transformer $transformer
     * @return array
     */
    public function transformToArrayFromModel(Model $model, Transformer $transformer): array
    {
        return $this->transformation($model, $transformer)->toArray();
    }

    /**
     * @param $data
     * @param Transformer $transformer
     * @param null $serializer
     * @return Fractal
     */
    protected function transformation($data, Transformer $transformer, $serializer = null): Fractal
    {
        return fractal($data, $transformer, $serializer = null);
    }
}
