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
namespace HyperfTest\Validation\Cases\fixtures;

use Hyperf\Utils\Contracts\Arrayable;

class Values implements Arrayable
{
    public function toArray(): array
    {
        return [1, 2, 3, 4];
    }
}
