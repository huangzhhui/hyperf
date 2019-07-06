<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace Hyperf\Task;

class TaskRegister
{
    /**
     * @var array
     */
    protected $container = [];

    public function __construct(array $container = [])
    {
        if (! isset($container['callable'])) {
            $container['callable'] = function (callable $callable, $data) {
                call($callable, $data);
            };
        }
        $this->container = $container;
    }

    public function register(string $type, callable $callable)
    {
        $this->container[$type] = $callable;
    }

    public function get(string $type): ?callable
    {
        return $this->container[$type] ?? null;
    }

    public function has(string $type): bool
    {
        return isset($this->container[$type]);
    }
}
