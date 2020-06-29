<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace HyperfTest\HttpServer\Stub;

use Hyperf\HttpServer\Router\RouteCollector;

class RouteCollectorStub extends RouteCollector
{
    public function mergeOptions(array $origin, array $options): array
    {
        return parent::mergeOptions($origin, $options);
    }
}
