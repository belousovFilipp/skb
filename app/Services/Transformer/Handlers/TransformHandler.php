<?php

namespace App\Services\Transformer\Handlers;

use App\Services\Transformer\Factories\TransformerFactory;
use App\Services\Transformer\Repositories\TransformRepository;
use App\Services\Transformer\Transformations\FractalTransformData;

abstract class TransformHandler
{
    /** @var TransformerFactory */
    protected $factory;

    /** @var TransformRepository */
    protected $repository;

    /** @var FractalTransformData */
    protected $transformData;

    /**
     * TransformHandler constructor.
     * @param TransformRepository $repository
     * @param TransformerFactory $transformerFactory
     */
    public function __construct(
        TransformRepository $repository,
        TransformerFactory $transformerFactory,
        FractalTransformData $transformData
    )
    {
        $this->repository = $repository;
        $this->factory = $transformerFactory;
        $this->transformData = $transformData;
    }
}
