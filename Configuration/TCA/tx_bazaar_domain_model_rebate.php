<?php
return array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_rebate',
		'label' => 'title',
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
		'searchFields' => 'title,type,user_group,voucher_code,multiple,minimum_cart_value,voucher_absolute,voucher_percent,',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('bazaar') . 'Resources/Public/Icons/tx_bazaar_domain_model_rebate.gif'
	),
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, type, user_group, voucher_code, multiple, minimum_cart_value, voucher_absolute, voucher_percent',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, title, type, user_group, voucher_code, multiple, minimum_cart_value, voucher_absolute, voucher_percent, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
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
				'foreign_table' => 'tx_bazaar_domain_model_rebate',
				'foreign_table_where' => 'AND tx_bazaar_domain_model_rebate.pid=###CURRENT_PID### AND tx_bazaar_domain_model_rebate.sys_language_uid IN (-1,0)',
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

		'title' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_rebate.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'type' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_rebate.type',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'user_group' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_rebate.user_group',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'voucher_code' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_rebate.voucher_code',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'multiple' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_rebate.multiple',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'minimum_cart_value' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_rebate.minimum_cart_value',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'double2'
			)
		),
		'voucher_absolute' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_rebate.voucher_absolute',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'double2'
			)
		),
		'voucher_percent' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_rebate.voucher_percent',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'double2'
			)
		),
		
	),
);