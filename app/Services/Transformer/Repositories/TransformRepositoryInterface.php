<?php

namespace App\Services\Transformer\Repositories;

interface TransformRepositoryInterface
{
    public function getTransformers(): array;

    public function getDefaultTransformer(): string;
}
