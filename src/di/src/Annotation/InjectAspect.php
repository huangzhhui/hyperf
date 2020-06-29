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
namespace Hyperf\Di\Annotation;

use Hyperf\Di\Aop\AbstractAspect;
use Hyperf\Di\Aop\ProceedingJoinPoint;

class InjectAspect extends AbstractAspect
{
    public $annotations = [
        Inject::class,
    ];

    public function process(ProceedingJoinPoint $proceedingJoinPoint)
    {
        // Do nothing, just to mark the class should be generate the proxy classs.
        return $proceedingJoinPoint->process();
    }
}
