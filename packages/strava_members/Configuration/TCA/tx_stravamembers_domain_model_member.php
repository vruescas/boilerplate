<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:strava_members/Resources/Private/Language/locallang_db.xlf:tx_stravamembers_domain_model_member',
        'label' => 'name',
        'iconfile' => 'EXT:store_inventory/Resources/Public/Icons/Member.svg',
    ],
    'columns' => [
        'strava_id' => [
            'label' => 'LLL:EXT:strava_members/Resources/Private/Language/locallang_db.xlf:tx_stravamembers_domain_model_member.strava_id',
            'config' => [
                'type' => 'input',
                'size' => '20',
                'eval' => 'trim',
            ],
        ],
    ],
    'types' => [
        '0' => ['showitem' => 'strava_id'],
    ],
];