<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace Hyperf\Casbin;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                \Casbin\Enforcer::class => EnforcerFactory::class
            ],
            'listeners' => [
            ],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                    'collectors' => [
                    ],
                ],
            ],
            'publish' => [
                [
                    'id' => 'migration',
                    'description' => 'The migration file of casbin database model.',
                    'source' => __DIR__ . '/../publish/2020_01_08_171216_create_rules_table.php',
                    'destination' => BASE_PATH . '/migrations/autoload/2020_01_08_171216_create_rules_table.php',
                ],
            ],
        ];
    }
}
