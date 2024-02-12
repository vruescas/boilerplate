<?php
defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:boilerplate/Resources/Private/Language/Ce/locallang_team.xlf:tt_content.CType',
        'boilerplate_team',
        'boilerplate_team',
        'boilerplate'
    ]
);

$tempColumns = [
    'irre_team' => [
        'label' => 'LLL:EXT:boilerplate/Resources/Private/Language/Ce/locallang_team.xlf:tt_content.irre_team',
        'config' => [
            'type' => 'inline',
            'allowed' => 'tx_boilerplate_domain_model_ce_team',
            'foreign_table' => 'tx_boilerplate_domain_model_ce_team',
            'foreign_sortby' => 'sorting',
            'foreign_field' => 'foreign_uid',
            'foreign_table_field' => 'tablename',
            'foreign_match_fields' => [
                'fieldname' => 'irre_team'
            ],
            'size' => 1,
            'minitems' => 1,
            'appearance' => [
                'levelLinksPosition' => 'bottom',
                'useSortable' => true,
                'showPossibleLocalizationRecords' => true,
                'showAllLocalizationLink' => true,
                'showSynchronizationLink' => true,
                'enabledControls' => [
                    'info' => false,
                ]
            ],
            'behaviour' => [
                'allowLanguageSynchronization' => true,
            ],
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns("tt_content", $tempColumns, 1);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes'][ 'boilerplate_team'] = 'boilerplate_team';

$GLOBALS['TCA']['tt_content']['types']['boilerplate_team'] = [
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
        --palette--;;general, irre_team,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;section,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
    '
];
