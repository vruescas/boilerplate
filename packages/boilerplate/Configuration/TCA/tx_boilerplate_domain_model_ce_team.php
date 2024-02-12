<?php
$filePath = \TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName('EXT:boilerplate/Configuration/TCA/Shared/Fields.php');
$includes = include($filePath);

return [
    'ctrl' => [
        'title' => 'LLL:EXT:boilerplate/Resources/Private/Language/Ce/locallang_team.xlf:tablename',
        'label' => 'members',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'versioningWS' => false,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'copyAfterDuplFields' => 'name, members',
        'searchFields' => 'name, members',
        'iconfile' => 'EXT:boilerplate/Resources/Public/Icons/Be/typo3_icon_team.svg',
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
        'base' => ['showitem' => 'name, --linebreak--, members'],
        'language_settings' => ['showitem' => 'sys_language_uid, --linebreak--, l10n_diffsource, --linebreak--, t3ver_label'],
        'hidden' => ['showitem' => 'hidden'],
        'access' => ['showitem' => 'starttime, endtime']
    ],
    'types' => [
        '0' => ['showitem' => '--palette--;;base,--div--;Language settings,--palette--;;language_settings,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access,'],
    ],
    'columns' => [
        'name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:boilerplate/Resources/Private/Language/Ce/locallang_team.xlf:tx_boilerplate_domain_model_ce_team.name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'members' => [
            'exclude' => true,
            'label' => 'LLL:EXT:boilerplate/Resources/Private/Language/Ce/locallang_team.xlf:tx_boilerplate_domain_model_ce_team.members',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_boilerplate_domain_model_ce_teammember',
                'foreign_field' => 'foreign_uid',
                'foreign_sortby' => 'sorting',
                'foreign_table_field' => 'tablename',
                'foreign_match_fields' => [
                    'fieldname' => 'members'
                ],
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
