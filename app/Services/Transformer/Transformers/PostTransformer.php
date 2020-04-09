<?php

namespace App\Services\Transformer\Transformers;

use Illuminate\Database\Eloquent\Model;

class PostTransformer extends Transformer
{
    /**
     * @param Model $entity
     * @return array
     */
    public function transform(Model $entity)
    {
        return [
            'id' => (int)$entity->id,
            'title' => (string)$entity->title,
            'slug' => (string)$entity->slug,
            'userId' => (int)$entity->user_id,
            'descFull' => (string)$entity->desc_full,
            'descShort' => (string)$entity->desc_short,
        ];
    }
}
