<?php

$GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default'] = array(
    'charset' => 'utf8',
    'dbname' => 'db',
    'driver' => 'mysqli',
    'host' => 'db',
    'password' => 'db',
    'port' => 3306,
    'user' => 'db',
);

$GLOBALS['TYPO3_CONF_VARS']['BE']['installToolPassword'] = '$argon2i$v=19$m=65536,t=16,p=1$cHpERWhNZ2trM1VWbjY5Vw$7Cdqt30yIfIt8HYvQWA9q+omOGYbTBvnXD29ipuVlsc';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'developmentConfiguration',
    'setup',
    'config.contentObjectExceptionHandler = 0'
);

$GLOBALS['TYPO3_CONF_VARS']['BE']['debug'] = true;
$GLOBALS['TYPO3_CONF_VARS']['SYS']['devIPmask'] = '*';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['displayErrors'] = 1;
$GLOBALS['TYPO3_CONF_VARS']['SYS']['systemLogLevel'] = 0;
$GLOBALS['TYPO3_CONF_VARS']['SYS']['excepcionalErrors'] = 12290;

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
  'developmentConfiguration',
  'setup',
  'config.contentObjectExceptionHandler = 0'
);

$GLOBALS['TYPO3_CONF_VARS']['SYS']['trustedHostsPattern'] = 'autkom|akn\.ddev\.site';

$GLOBALS['TYPO3_CONF_VARS']['MAIL']['transport'] = 'smtp';
$GLOBALS['TYPO3_CONF_VARS']['MAIL']['transport_smtp_server'] = 'localhost:1025';

