<?php

namespace App\Services\Transformer\Transformers;

use Illuminate\Database\Eloquent\Model;
use League\Fractal\TransformerAbstract;

abstract class Transformer extends TransformerAbstract
{
    abstract function transform(Model $entity);
}
