<?php

declare(strict_types=1);

use Doctrine\DBAL\Driver\PDO\Sqlite\Driver;
use Doctrine\DBAL\Driver\PDO\Sqlite\Driver;

return [
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'configuration' => 'orm_default',
                'eventmanager'  => 'orm_default',
                'driverClass'   => Driver::class,
                'params'        => [
                    'memory' => true,
                ],
            ],
        ],
    ],
];
