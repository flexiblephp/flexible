<?php

declare(strict_types=1);

namespace Flexible\Container;

use Exception;
use Psr\Container\NotFoundExceptionInterface;

class NotFoundException extends Exception implements NotFoundExceptionInterface
{

}
