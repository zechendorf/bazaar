<?php
return array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_order',
		'label' => 'date',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'date,user,billing_address,delivery_address,positions,vouchers,payment_type,shipping_type,shipments,invoices,',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('bazaar') . 'Resources/Public/Icons/tx_bazaar_domain_model_order.gif'
	),
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, date, user, billing_address, delivery_address, positions, vouchers, payment_type, shipping_type, shipments, invoices',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, date, user, billing_address, delivery_address, positions, vouchers, payment_type, shipping_type, shipments, invoices, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_bazaar_domain_model_order',
				'foreign_table_where' => 'AND tx_bazaar_domain_model_order.pid=###CURRENT_PID### AND tx_bazaar_domain_model_order.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'date' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_order.date',
			'config' => array(
				'dbType' => 'datetime',
				'type' => 'input',
				'size' => 12,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => '0000-00-00 00:00:00'
			),
		),
		'user' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_order.user',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'fe_users',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'billing_address' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_order.billing_address',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_bazaar_domain_model_address',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'delivery_address' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_order.delivery_address',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_bazaar_domain_model_address',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'positions' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_order.positions',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_bazaar_domain_model_position',
				'foreign_field' => 'tx_order',
				'maxitems' => 9999,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),

		),
		'vouchers' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_order.vouchers',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectMultipleSideBySide',
				'foreign_table' => 'tx_bazaar_domain_model_voucher',
				'MM' => 'tx_bazaar_order_voucher_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'module' => array(
							'name' => 'wizard_edit',
						),
						'type' => 'popup',
						'title' => 'Edit',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'module' => array(
							'name' => 'wizard_add',
						),
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table' => 'tx_bazaar_domain_model_voucher',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
						),
					),
				),
			),
		),
		'payment_type' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_order.payment_type',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_bazaar_domain_model_paymenttype',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'shipping_type' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_order.shipping_type',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_bazaar_domain_model_shippingtype',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'shipments' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_order.shipments',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_bazaar_domain_model_shipment',
				'foreign_field' => 'tx_order',
				'maxitems' => 9999,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),

		),
		'invoices' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_order.invoices',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_bazaar_domain_model_invoice',
				'foreign_field' => 'tx_order',
				'maxitems' => 9999,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),

		),
		
	),
);