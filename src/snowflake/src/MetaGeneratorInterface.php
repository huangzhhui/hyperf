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
namespace Hyperf\Snowflake;

interface MetaGeneratorInterface
{
    const DEFAULT_BEGIN_SECOND = 1560960000;

    public function generate(): Meta;

    public function getBeginTimestamp(): int;

    public function getConfiguration(): ConfigurationInterface;
}
