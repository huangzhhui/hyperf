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
namespace Hyperf\GraphQL\Annotation;

use Hyperf\Di\Annotation\AnnotationInterface;

/**
 * @Annotation
 * @Target({"METHOD"})
 */
class FailWith extends \TheCodingMachine\GraphQLite\Annotations\FailWith implements AnnotationInterface
{
    use AnnotationTrait;
}
