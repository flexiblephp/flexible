<?php

namespace Flexible\Container;

use Psr\Container\ContainerInterface as PsrContainerInterface;

interface ContainerInterface extends PsrContainerInterface
{
    public function bind(string $abstraction, string $implementation): void;

    public function singleton(string $abstraction, string $implementation): void;

    public function addServiceProvider(string $serviceProvider): void;

    public function bindings(array $bindings = []): void;
}
