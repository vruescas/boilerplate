<?php
defined('TYPO3') or die();

call_user_func(
  function() {
    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
        \TYPO3\CMS\Core\Imaging\IconRegistry::class
    );

    $iconRegistry->registerIcon(
        'boilerplate_team',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:boilerplate/Resources/Public/Icons/Be/typo3_icon_team.svg']
    );
  });