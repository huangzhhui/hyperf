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
namespace Hyperf\AsyncQueue\Event;

use Hyperf\AsyncQueue\MessageInterface;

class Event
{
    /**
     * @var MessageInterface
     */
    public $message;

    public function __construct(MessageInterface $message)
    {
        $this->message = $message;
    }

    public function getMessage(): MessageInterface
    {
        return $this->message;
    }
}
