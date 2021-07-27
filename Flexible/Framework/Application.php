<?php

namespace Flexible\Framework;

use Flexible\Config\Repository;
use Flexible\Config\RepositoryInterface;

class Application
{
    public const VERSION = 'dev-master';
    protected RepositoryInterface $config;

    public function __construct(
        RepositoryInterface $config
    ) {
        $this->config = $config;
    }

    /**
     * Default static factory.
     *
     * @return static
     */
    public static function create(
        ?RepositoryInterface $config = null
    ): self {
        return new static(
            $config ?? new Repository(),
        );
    }

    /**
     * Config Repository getter
     *
     * @return RepositoryInterface
     */
    public function config(): RepositoryInterface
    {
        return $this->config;
    }
}
