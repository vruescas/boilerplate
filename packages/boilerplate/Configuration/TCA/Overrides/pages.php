<?php
defined('TYPO3') or die();

use \TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::registerPageTSConfigFile(
  'boilerplate',
  'Configuration/TsConfig/page.tsconfig',
  'Boilerplate config'
);