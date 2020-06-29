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
namespace HyperfTest\Event\Event;

use Hyperf\Event\Stoppable;
use Psr\EventDispatcher\StoppableEventInterface;

class Alpha implements StoppableEventInterface
{
    use Stoppable;
}
