<?php

namespace Spatie\LaravelData\Tests\Fakes\Transformers;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Support\DataProperty;
use Spatie\LaravelData\Transformers\Transformer;

class ConfidentialDataCollectionTransformer implements Transformer
{
    public function transform(DataProperty $property, mixed $value): mixed
    {
        /** @var array $value */
        return array_map(fn (Data $data) => (new ConfidentialDataTransformer())->transform($property, $data), $value);
    }
}
