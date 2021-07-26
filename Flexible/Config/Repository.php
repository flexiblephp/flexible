<?php

declare(strict_types=1);

namespace Flexible\Config;

class Repository implements RepositoryInterface
{
    protected array $items = [];

    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    public function get(string $key, $default = null)
    {
        if (false === $this->has($key)) {
            return $default;
        }

        return $this->items[$key];
    }

    public function items(): array
    {
        return $this->items;
    }

    public function has(string $key): bool
    {
        return true === array_key_exists($key, $this->items);
    }

    public function set(string $key, $value = null): void
    {
        $this->items[$key] = $value;
    }
}
