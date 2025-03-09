<?php

declare(strict_types=1);

namespace App\ApiResource;

use ApiPlatform\Metadata\Post;
use App\Dto\Output\TestSearchResult;
use App\State\TestSearchProcessor;

#[Post(output: TestSearchResult::class, processor: TestSearchProcessor::class)]
final class TestSearch
{
    public \DateTimeImmutable $from;
    public \DateTimeImmutable $to;
}
