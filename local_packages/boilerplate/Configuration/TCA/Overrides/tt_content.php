<?php

declare(strict_types=1);
defined('TYPO3') or die();

$tempColumns = [
    'irre_team' => [
        'label' => 'LLL:EXT:boilerplate/Resources/Private/Language/Ce/locallang_team.xlf:tt_content.irre_teamss',
        'config' => [
            'type' => 'inline',
            'allowed' => 'tx_boilerplate_domain_model_ce_person',
            'foreign_table' => 'tx_boilerplate_domain_model_ce_person',
            'foreign_sortby' => 'sorting',
            'foreign_field' => 'foreign_uid',
            'size' => 1,
            'minitems' => 1,
            'maxitems' => 100,
            'appearance' => [
                'collapseAll' => true,
                'expandSingle' => true,
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

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:boilerplate/Resources/Private/Language/locallang.xlf:boilerplate_persons_title',
        'boilerplate_persons',
        'content-text',
    ],
    'textmedia',
    'after'
);

$GLOBALS['TCA']['tt_content']['types']['boilerplate_persons'] = [
    'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
               --palette--;;general,
               header; Internal title (not displayed),
               persons,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
               --palette--;;hidden,
               --palette--;;access,
         ',
    'columnsOverrides' => [
        'persons' => [
            'label' => 'Persons',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_boilerplate_domain_model_person',
                'foreign_field' => 'foreign_uid',
                'foreign_sortby' => 'sorting',
                'foreign_table_field' => 'tablename',
                'maxitems' => 9999,
                'appearance' => [
                    'newRecordLinkAddTitle' => 1,
                    'useCombination' => true,
                    'collapseAll' => false,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1,
                ],
            ],
        ],
    ],
];