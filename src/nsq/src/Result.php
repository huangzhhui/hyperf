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
namespace Hyperf\Nsq;

class Result
{
    /**
     * Acknowledge the message.
     */
    const ACK = 'ack';

    /**
     * Reject the message and requeue it.
     */
    const REQUEUE = 'requeue';

    /**
     * Reject the message and drop it.
     */
    const DROP = 'drop';
}
