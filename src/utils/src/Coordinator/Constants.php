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
namespace Hyperf\Utils\Coordinator;

class Constants
{
    /**
     * Swoole onWorkerStart event.
     */
    const WORKER_START = 'workerStart';

    /**
     * Swoole onWorkerExit event.
     */
    const WORKER_EXIT = 'workerExit';

    /**
     * Swoole onWorkerStart event.
     */
    const ON_WORKER_START = 'workerStart';

    /**
     * Swoole onWorkerExit event.
     */
    const ON_WORKER_EXIT = 'workerExit';
}
