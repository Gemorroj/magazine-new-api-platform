<?php

namespace App\State;

use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProcessorInterface;
use App\ApiResource\TestSearch;
use App\Dto\Output\TestSearchResult;

/**
 * @implements ProcessorInterface<TestSearch, TestSearchResult>
 */
class TestSearchProcessor implements ProcessorInterface
{
    /**
     * @param TestSearch $data
     */
    public function process(mixed $data, Operation $operation, array $uriVariables = [], array $context = []): TestSearchResult
    {
        return new TestSearchResult(
            ['a lot of json data flights'],
            ['a lot of json data airports'],
            ['a lot of json data cities'],
        );
    }
}
