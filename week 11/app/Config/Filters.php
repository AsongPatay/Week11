<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
    public $aliases = [
        'csrf'          => \CodeIgniter\Filters\CSRF::class,
        'toolbar'       => \CodeIgniter\Filters\DebugToolbar::class,
        'honeypot'      => \CodeIgniter\Filters\Honeypot::class,
        'invalidchars'  => \CodeIgniter\Filters\InvalidChars::class,
        'secureheaders' => \CodeIgniter\Filters\SecureHeaders::class,
    ];

    public $globals = [
        'before' => [
            'csrf',
        ],
        'after' => [
            'toolbar',
        ],
    ];

    public $methods = [];
    public $filters = [];
}
