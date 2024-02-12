<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:boilerplate/Resources/Private/Language/Ce/locallang_teammember.xlf:tablename',
        'label' => 'member_name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'versioningWS' => false,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'copyAfterDuplFields' => 'member_name, member_short_info, member_description, member_image',
        'searchFields' => 'member_name, member_short_info, member_description, member_image',
        'iconfile' => 'EXT:boilerplate/Resources/Public/Icons/Be/typo3_icon_member.svg',
        'hideTable' => true,
        'security' => [
            'ignorePageTypeRestriction' => true,
        ],
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
    ],
    'palettes' => [
        'base' => ['showitem' => 'member_name, --linebreak--, member_short_info, --linebreak--, member_description, --linebreak--, member_image'],
        'language_settings' => ['showitem' => 'sys_language_uid, --linebreak--, l10n_diffsource, --linebreak--, t3ver_label'],
        'hidden' => ['showitem' => 'hidden'],
        'access' => ['showitem' => 'starttime, endtime']
    ],
    'types' => [
        '1' => ['showitem' => '--palette--;;base,--div--;Language settings,--palette--;;language_settings,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access,'],
    ],
    'columns' => [
        'member_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:boilerplate/Resources/Private/Language/Ce/locallang_teammember.xlf:tx_boilerplate_domain_model_teammember.member_name',
            'config' => [
                'type' => 'input',
                'eval' => 'trim'
            ],
        ],
        'member_short_info' => [
            'exclude' => true,
            'label' => 'LLL:EXT:boilerplate/Resources/Private/Language/Ce/locallang_teammember.xlf:tx_boilerplate_domain_model_teammember.member_short_info',
            'config' => [
                'type' => 'input',
                'eval' => 'trim'
            ],
        ],
        'member_description' => [
            'exclude' => true,
            'label' => 'LLL:EXT:boilerplate/Resources/Private/Language/Ce/locallang_teammember.xlf:tx_boilerplate_domain_model_teammember.member_description',
            'config' => [
                'type' => 'text',
                'eval' => 'trim'
            ],
        ],
        'member_image' => [
            'exclude' => true,
            'label' => 'LLL:EXT:boilerplate/Resources/Private/Language/Ce/locallang_teammember.xlf:tx_boilerplate_domain_model_teammember.member_image',
            'config' => [
                'type' => 'file',
                'appearance' => [
                    'showPossibleLocalizationRecords' => true,
                    'showAllLocalizationLink'         => true,
                    'showSynchronizationLink'         => true,
                ],
                'overrideChildTca'     => [
                    'types' => [
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                            'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                        ],
                    ],
                    'columns' => [
                        'crop' => [
                            'config' => [
                                'cropVariants' => [
                                    'default' => [
                                        'disabled' => true
                                    ],
                                ]
                            ]
                        ]
                    ]
                ],
                'maxitems' => 1,
                'allowed' => 'common-image-types'
            ],
        ],
        'sys_language_uid' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => ['type' => 'language']
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'displayCond' => 'FIELD:t3ver_label:REQ:true',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'none',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        'label' => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ]
        ],
        'starttime' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'datetime',
                'eval' => 'datetime,int',
                'default' => 0,
            ],
        ],
        'endtime' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'datetime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => 2145913200,
                ],
            ],
        ],
    ],
];
