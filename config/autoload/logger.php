<?php

declare(strict_types=1);

use Monolog\Formatter\LogstashFormatter;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Level;
use Hyperf\Support;

$appName = Support\env('APP_NAME', 'maliboot');
$defaultLogDir = '';
if (in_array(Support\env('APP_ENV', 'production'), ['production', 'gray'])) {
    $defaultLogDir = '/var/www-log';
} else {
    $defaultLogDir = './runtime';
}
$logDir = rtrim(Support\env('WWW_LOG_DIR', $defaultLogDir), '/') . '/' . $appName . '/logs/';
$formatter = [
    'class' => LogstashFormatter::class,
    'constructor' => [
        'applicationName' => $appName,
    ],
];

$handlers = [
    'default' => [
        'handlers' => [
            [
                'class' => RotatingFileHandler::class,
                'constructor' => [
                    'filename' => $logDir . '/info.log',
                    'level' => Level::Info,
                ],
                'formatter' => $formatter,
            ],
            [
                'class' => RotatingFileHandler::class,
                'constructor' => [
                    'filename' => $logDir . '/error.log',
                    'level' => Level::Error,
                ],
                'formatter' => $formatter,
            ],
            [
                'class' => RotatingFileHandler::class,
                'constructor' => [
                    'filename' => $logDir . '/warning.log',
                    'level' => Level::Warning,
                ],
                'formatter' => $formatter,
            ],
            [
                'class' => RotatingFileHandler::class,
                'constructor' => [
                    'filename' => $logDir . '/critical.log',
                    'level' => Level::Critical,
                ],
                'formatter' => $formatter,
            ],
        ],
    ],
];

$appEnv = Support\env('APP_ENV', 'production');
if (in_array($appEnv, ['test', 'local', 'dev'])) {
    $handlers['default']['handlers'][] = [
        'class' => RotatingFileHandler::class,
        'constructor' => [
            'filename' => $logDir . '/debug.log',
            'level' => Level::Debug,
        ],
        'formatter' => $formatter,
    ];
}

return $handlers;
