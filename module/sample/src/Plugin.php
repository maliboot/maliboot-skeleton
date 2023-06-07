<?php

declare(strict_types=1);

namespace Module\Sample;

use MaliBoot\Plugin\AbstractPlugin;

class Plugin extends AbstractPlugin
{
    protected static string $dir = __DIR__;

    protected function config(): array
    {
        return [
            'commands' => [
            ],
            'dependencies' => [
            ],
            'listeners' => [
            ],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
            'publish' => [
            ],
        ];
    }
}
