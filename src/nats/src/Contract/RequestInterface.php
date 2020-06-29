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
namespace Hyperf\Nats\Contract;

use Closure;
use Hyperf\Nats\Message;

interface RequestInterface
{
    public function request(string $subject, $payload, Closure $callback);

    public function requestSync(string $subject, $payload): Message;
}
