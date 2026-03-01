<?php

return [
    'modules' => [
        Konekt\AppShell\Providers\ModuleServiceProvider::class => [
            'default_theme' => [
                'custom_assets' => [
                    'enabled' => true,
                    'css_link' => ['css/appshell.css', '/css/admin/app.css'],
                    'js_link'  => 'js/appshell.js',
                    'helper'   => 'asset',
                ],
            ],
            'ui' => [
                'name' => 'Vanilo',
                'url' => '/admin',
                'theme' => 'appshell',
                'use_mix' => true
            ]
        ],
        Vanilo\Foundation\Providers\ModuleServiceProvider::class => [
            'image' => [
                'taxon' => [
                    'variants' => [
                        'thumbnail' => [
                            'width'  => 250,
                            'height' => 188,
                            'fit' => 'contain'
                        ],
                        'header' => [
                            'width'  => 1110,
                            'height' => 150,
                            'fit' => 'contain'
                        ],
                        'card' => [
                            'width'  => 521,
                            'height' => 293,
                            'fit' => 'contain'
                        ]
                    ]
                ],
                'variants' => [
                    'thumbnail' => [
                        'width'  => 250,
                        'height' => 188,
                        'fit' => 'fill'
                    ],
                    'medium' => [
                        'width'  => 540,
                        'height' => 406,
                        'fit' => 'fill'
                    ]
                ]
            ],
        ],
        Vanilo\Admin\Providers\ModuleServiceProvider::class => [
            'route' => [
                'prefix' => 'admin',
                'as' => 'vanilo.admin.',
                'middleware' => ['auth']
            ],
        ],
        Vanilo\Adyen\Providers\ModuleServiceProvider::class,
        Vanilo\Braintree\Providers\ModuleServiceProvider::class,
        Vanilo\Mollie\Providers\ModuleServiceProvider::class,
        Vanilo\Euplatesc\Providers\ModuleServiceProvider::class,
        Vanilo\Netopia\Providers\ModuleServiceProvider::class,
        Vanilo\Paypal\Providers\ModuleServiceProvider::class,
    ]
];
