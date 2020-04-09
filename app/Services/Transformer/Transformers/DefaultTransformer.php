<?php

namespace App\Services\Transformer\Transformers;

use Illuminate\Database\Eloquent\Model;

class DefaultTransformer extends Transformer
{
    /**
     * @param Model $entity
     * @return array
     */
    public function transform(Model $entity): array
    {
        return [
            'email' => $entity->email,
            'message' => $entity->message,
        ];
    }
}
