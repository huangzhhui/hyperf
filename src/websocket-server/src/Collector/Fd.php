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
namespace Hyperf\WebSocketServer\Collector;

class Fd
{
    /**
     * @var int
     */
    public $fd;

    /**
     * @var string
     */
    public $class;

    public function __construct(int $fd, string $class)
    {
        $this->fd = $fd;
        $this->class = $class;
    }
}
