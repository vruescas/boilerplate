<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Boilerplate',
    'description' => '',
    'category' => 'fe',
    'author' => 'Valentin Ruescas',
    'author_email' => 'var.vlc@coma.de',
    'author_company' => 'Coma AG',
    'shy' => '',
    'priority' => '',
    'module' => '',
    'state' => 'alpha',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'modify_tables' => '',
    'clearCacheOnLoad' => 0,
    'lockType' => '',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '^12.1.',
            'php' => '8.1.0-8.99.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
);
