<?php

$currentApplicationContext = \TYPO3\CMS\Core\Core\Environment::getContext();
$GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] .= ' [' . strtoupper((string)$currentApplicationContext) . ']';
$configFile = \TYPO3\CMS\Core\Core\Environment::getPublicPath() . '/../Configuration/' . (string)$currentApplicationContext . '/Settings.php';

if (file_exists($configFile)) {
  require($configFile);
} else {
  die('Missing configuration file');
}

$GLOBALS['TYPO3_CONF_VARS']['FE']['cacheHash']['excludedParameters'][] = 'type';