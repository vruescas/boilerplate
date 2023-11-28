<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Boilerplate',
    'description' => '',
    'category' => 'plugin',
    'author' => 'Valentin Ruescas',
    'author_email' => 'var.vlc@coma.de',
    'author_company' => 'Coma AG',
    'state' => 'stable',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.0.0-12.4.99',
            'php' => '8.1.0-8.99.99',
            'mask' => '8.1.0-8.1.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
