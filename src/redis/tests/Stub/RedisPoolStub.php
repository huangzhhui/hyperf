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
namespace HyperfTest\Redis\Stub;

use Hyperf\Contract\ConnectionInterface;
use Hyperf\Redis\Pool\RedisPool;

class RedisPoolStub extends RedisPool
{
    protected function createConnection(): ConnectionInterface
    {
        return new RedisConnectionStub($this->container, $this, $this->config);
    }
}
