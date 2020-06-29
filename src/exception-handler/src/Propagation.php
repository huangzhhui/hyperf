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
namespace Hyperf\ExceptionHandler;

use Hyperf\Utils\Traits\StaticInstance;

class Propagation
{
    use StaticInstance;

    /**
     * Determine if the exception should propagate to next handler.
     *
     * @var bool
     */
    protected $propagationStopped = false;

    public function isPropagationStopped(): bool
    {
        return $this->propagationStopped;
    }

    public function setPropagationStopped(bool $propagationStopped): Propagation
    {
        $this->propagationStopped = $propagationStopped;
        return $this;
    }
}
