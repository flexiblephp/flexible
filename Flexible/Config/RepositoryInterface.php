<?php

namespace Flexible\Config;

interface RepositoryInterface
{
    public function get(string $key, $default = null);

    public function has(string $key): bool;

    public function items(): array;

    public function set(string $key, $value = null): void;
}
