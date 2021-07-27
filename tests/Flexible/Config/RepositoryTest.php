<?php

declare(strict_types=1);

namespace Tests\Flexible\Config;

use Flexible\Config\Repository;
use Flexible\Config\RepositoryInterface;
use PHPUnit\Framework\TestCase;

final class RepositoryTest extends TestCase
{
    private RepositoryInterface $repository;

    protected function setUp(): void
    {
        $this->repository = new Repository();
    }

    /** @test */
    public function itShouldSetAnItem(): void
    {
        $this->repository->set('foo', 'bar');
        $items = $this->repository->items();

        $this->assertTrue(array_key_exists('foo', $items));
    }
}
