<?php

defined('TYPO3') or die();

call_user_func(function()
{
  \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
      'StravaMembers',
      'MembersList',
      [
          \Boilerplate\StravaMembers\Controller\StravaMembersController::class => 'list',
      ],
      // non-cacheable actions
      [
          \Boilerplate\StravaMembers\Controller\StravaMembersController::class => '',
      ]
  );

});