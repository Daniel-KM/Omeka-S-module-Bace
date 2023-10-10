<?php declare(strict_types=1);

namespace Bace;

return [
    'assets' => [
        // Override internals assets. Only for Omeka assets: modules can use another filename.
        'internals' => [
            'vendor/chosen-js/chosen.jquery.js' => 'Bace',
        ],
    ],
    'bace' => [
    ],
];
