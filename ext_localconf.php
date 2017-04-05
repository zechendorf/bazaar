<?php
if (!defined('TYPO3_MODE')) {
  die('Access denied.');
}
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'ZECHENDORF.' . $_EXTKEY,
	'Invoice',
	array('Invoice' => 'list, show'),
	array('Invoice' => 'list, show')
);
