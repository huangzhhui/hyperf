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
use Hyperf\Watcher\Driver\FswatchDriver;

return [
    'driver' => FswatchDriver::class,
    'bin' => 'php',
    'watch' => [
        'dir' => ['app', 'config'],
        'files' => ['.env'],
    ],
];
