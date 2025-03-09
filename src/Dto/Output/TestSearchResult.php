<?php

declare(strict_types=1);

namespace App\Dto\Output;

final readonly class TestSearchResult
{
    /**
     * @param string[] $flights
     * @param string[] $airports
     * @param string[] $cities
     */
    public function __construct(public array $flights, public array $airports, public array $cities)
    {
    }
}
