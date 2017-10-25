<?php
return array(
    'ctrl' => array(
        'title'    => 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_product',
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
        'searchFields' => 'title,type,page_title,sub_title,product_number,ean,images,price,description,description1,description2,description3,tax_rate,product_combinations,volume_discounts,',
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('bazaar') . 'Resources/Public/Icons/tx_bazaar_domain_model_product.gif',
        'type' => 'type'
    ),
    'interface' => array(
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, type, page_title, sub_title, product_number, ean, images, price, description, description1, description2, description3, tax_rate, product_combinations, volume_discounts',
    ),
    'types' => array(
        '0' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, title, type, page_title, sub_title, product_number, ean, images, price, description;;;richtext:rte_transform[mode=ts_links], description1;;;richtext:rte_transform[mode=ts_links], description2;;;richtext:rte_transform[mode=ts_links], description3;;;richtext:rte_transform[mode=ts_links], tax_rate, product_combinations, volume_discounts, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
        '1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, title, type, page_title, sub_title, product_number, ean, images, price, description;;;richtext:rte_transform[mode=ts_links], description1;;;richtext:rte_transform[mode=ts_links], description2;;;richtext:rte_transform[mode=ts_links], description3;;;richtext:rte_transform[mode=ts_links], --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
        '10' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, main_product, title, type, product_number, ean, images, price, tax_rate, product_combinations, volume_discounts, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
        '11' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, title, type, page_title, sub_title, product_number, ean, images, price, description;;;richtext:rte_transform[mode=ts_links], description1;;;richtext:rte_transform[mode=ts_links], description2;;;richtext:rte_transform[mode=ts_links], description3;;;richtext:rte_transform[mode=ts_links], tax_rate, product_combinations, volume_discounts, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
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
                'foreign_table' => 'tx_bazaar_domain_model_product',
                'foreign_table_where' => 'AND tx_bazaar_domain_model_product.pid=###CURRENT_PID### AND tx_bazaar_domain_model_product.sys_language_uid IN (-1,0)',
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


        'main_product' => array(
            'exclude' => 1,
            'l10n_mode' => 'exclude',
            'label' => 'Haupt-Produkt',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_bazaar_domain_model_product',
                'foreign_table_where' => 'and tx_bazaar_domain_model_product.sys_language_uid in (0,-1) and tx_bazaar_domain_model_product.type=1 order by tx_bazaar_domain_model_product.title',
                'maxitems' => 1,
                'wizards' => array(
                    'suggest' => array(
                        'type' => 'suggest',
                        'default' => array(
                            'additionalSearchFields' => 'title'
                        )
                    )
                )
            ),
        ),
        'title' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_product.title',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'type' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_product.type',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => array(
                    array('Produkt (sichtbar im Shop)', 0),
                    array('Produkt mit Variationen (sichtbar im Shop)', 1),
                    array('Produktvariation (nicht sichtbar im Shop)', 10),
                    array('Produkt (nicht sichtbar im Shop)', 11)
                ),
                'size' => 1,
                'maxitems' => 1,
                'eval' => ''
            ),
        ),
        'page_title' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_product.page_title',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'sub_title' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_product.sub_title',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'product_number' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_product.product_number',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'ean' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_product.ean',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'images' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_product.images',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'images',
                array(
                    'appearance' => array(
                        'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:images.addFileReference'
                    ),
                    'foreign_types' => array(
                        '0' => array(
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ),
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => array(
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ),
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => array(
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ),
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => array(
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ),
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => array(
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ),
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => array(
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        )
                    ),
                    'maxitems' => 1
                ),
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ),
        'price' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_product.price',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            )
        ),
        'description' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_product.description',
            'config' => array(
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
                'wizards' => array(
                    'RTE' => array(
                        'icon' => 'wizard_rte2.gif',
                        'notNewRecords'=> 1,
                        'RTEonly' => 1,
                        'module' => array(
                            'name' => 'wizard_rich_text_editor',
                            'urlParameters' => array(
                                'mode' => 'wizard',
                                'act' => 'wizard_rte.php'
                            )
                        ),
                        'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
                        'type' => 'script'
                    )
                )
            ),
        ),
        'description1' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_product.description1',
            'config' => array(
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
                'wizards' => array(
                    'RTE' => array(
                        'icon' => 'wizard_rte2.gif',
                        'notNewRecords'=> 1,
                        'RTEonly' => 1,
                        'module' => array(
                            'name' => 'wizard_rich_text_editor',
                            'urlParameters' => array(
                                'mode' => 'wizard',
                                'act' => 'wizard_rte.php'
                            )
                        ),
                        'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
                        'type' => 'script'
                    )
                )
            ),
        ),
        'description2' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_product.description2',
            'config' => array(
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
                'wizards' => array(
                    'RTE' => array(
                        'icon' => 'wizard_rte2.gif',
                        'notNewRecords'=> 1,
                        'RTEonly' => 1,
                        'module' => array(
                            'name' => 'wizard_rich_text_editor',
                            'urlParameters' => array(
                                'mode' => 'wizard',
                                'act' => 'wizard_rte.php'
                            )
                        ),
                        'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
                        'type' => 'script'
                    )
                )
            ),
        ),
        'description3' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_product.description3',
            'config' => array(
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
                'wizards' => array(
                    'RTE' => array(
                        'icon' => 'wizard_rte2.gif',
                        'notNewRecords'=> 1,
                        'RTEonly' => 1,
                        'module' => array(
                            'name' => 'wizard_rich_text_editor',
                            'urlParameters' => array(
                                'mode' => 'wizard',
                                'act' => 'wizard_rte.php'
                            )
                        ),
                        'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
                        'type' => 'script'
                    )
                )
            ),
        ),
        'tax_rate' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_product.tax_rate',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_bazaar_domain_model_taxrate',
                'minitems' => 0,
                'maxitems' => 1,
            ),
        ),
        'product_combinations' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_product.product_combinations',
            'config' => array(
                'type' => 'inline',
                'foreign_table' => 'tx_bazaar_domain_model_productcombination',
                'foreign_field' => 'product',
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
        'volume_discounts' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:bazaar/Resources/Private/Language/locallang_db.xlf:tx_bazaar_domain_model_product.volume_discounts',
            'config' => array(
                'type' => 'inline',
                'foreign_table' => 'tx_bazaar_domain_model_volumediscount',
                'foreign_field' => 'product',
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
