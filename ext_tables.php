<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'ZECHENDORF.' . $_EXTKEY,
	'Invoice',
	'Invoice'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Bazaar');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bazaar_domain_model_paymenttype', 'EXT:bazaar/Resources/Private/Language/locallang_csh_tx_bazaar_domain_model_paymenttype.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bazaar_domain_model_paymenttype');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bazaar_domain_model_voucher', 'EXT:bazaar/Resources/Private/Language/locallang_csh_tx_bazaar_domain_model_voucher.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bazaar_domain_model_voucher');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bazaar_domain_model_country', 'EXT:bazaar/Resources/Private/Language/locallang_csh_tx_bazaar_domain_model_country.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bazaar_domain_model_country');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bazaar_domain_model_shippingtype', 'EXT:bazaar/Resources/Private/Language/locallang_csh_tx_bazaar_domain_model_shippingtype.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bazaar_domain_model_shippingtype');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bazaar_domain_model_taxrate', 'EXT:bazaar/Resources/Private/Language/locallang_csh_tx_bazaar_domain_model_taxrate.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bazaar_domain_model_taxrate');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bazaar_domain_model_discount', 'EXT:bazaar/Resources/Private/Language/locallang_csh_tx_bazaar_domain_model_discount.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bazaar_domain_model_discount');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bazaar_domain_model_shippingcost', 'EXT:bazaar/Resources/Private/Language/locallang_csh_tx_bazaar_domain_model_shippingcost.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bazaar_domain_model_shippingcost');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bazaar_domain_model_volumediscount', 'EXT:bazaar/Resources/Private/Language/locallang_csh_tx_bazaar_domain_model_volumediscount.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bazaar_domain_model_volumediscount');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bazaar_domain_model_product', 'EXT:bazaar/Resources/Private/Language/locallang_csh_tx_bazaar_domain_model_product.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bazaar_domain_model_product');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bazaar_domain_model_productcombination', 'EXT:bazaar/Resources/Private/Language/locallang_csh_tx_bazaar_domain_model_productcombination.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bazaar_domain_model_productcombination');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bazaar_domain_model_productrating', 'EXT:bazaar/Resources/Private/Language/locallang_csh_tx_bazaar_domain_model_productrating.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bazaar_domain_model_productrating');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bazaar_domain_model_order', 'EXT:bazaar/Resources/Private/Language/locallang_csh_tx_bazaar_domain_model_order.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bazaar_domain_model_order');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bazaar_domain_model_address', 'EXT:bazaar/Resources/Private/Language/locallang_csh_tx_bazaar_domain_model_address.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bazaar_domain_model_address');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bazaar_domain_model_position', 'EXT:bazaar/Resources/Private/Language/locallang_csh_tx_bazaar_domain_model_position.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bazaar_domain_model_position');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bazaar_domain_model_shipment', 'EXT:bazaar/Resources/Private/Language/locallang_csh_tx_bazaar_domain_model_shipment.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bazaar_domain_model_shipment');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bazaar_domain_model_invoice', 'EXT:bazaar/Resources/Private/Language/locallang_csh_tx_bazaar_domain_model_invoice.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bazaar_domain_model_invoice');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bazaar_domain_model_transactions', 'EXT:bazaar/Resources/Private/Language/locallang_csh_tx_bazaar_domain_model_transactions.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bazaar_domain_model_transactions');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bazaar_domain_model_payment', 'EXT:bazaar/Resources/Private/Language/locallang_csh_tx_bazaar_domain_model_payment.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bazaar_domain_model_payment');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
    $_EXTKEY,
    'tx_bazaar_domain_model_product'
);
