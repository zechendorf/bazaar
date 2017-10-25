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

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'ZECHENDORF.' . $_EXTKEY,
    'Order',
    array('Order' => 'list, show'),
    array('Order' => 'list, show')
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'ZECHENDORF.' . $_EXTKEY,
    'Product',
    array('Product' => 'list, show'),
    array('Product' => 'list, show')
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'ZECHENDORF.' . $_EXTKEY,
    'Shop',
    array('Shop' => 'show, showCategory'),
    array()
);
