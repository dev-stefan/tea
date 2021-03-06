<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Tea example',
    'description' => 'Example extension for unit testing and best practices',
    'category' => 'example',
    'author' => 'Oliver Klee',
    'author_email' => 'typo3-coding@oliverklee.de',
    'author_company' => 'oliverklee.de',
    'state' => 'stable',
    'version' => '2.0.x-dev',
    'constraints' => [
        'depends' => [
            'php' => '7.0.0-7.2.99',
            'typo3' => '7.6.0-8.7.99',
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'OliverKlee\\Tea\\' => 'Classes/',
        ],
    ],
    'autoload-dev' => [
        'psr-4' => [
            'OliverKlee\\Tea\\Tests\\' => 'Tests/',
        ],
    ],
];
