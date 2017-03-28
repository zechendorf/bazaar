<?php
namespace ZECHENDORF\Bazaar\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2017 Christopher Zechendorf <christopher@zechendorf.com>, ZECHENDORF
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Product
 */
class Product extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     *
     * @var string
     */
    protected $title = '';
    
    /**
     * type
     *
     * @var int
     */
    protected $type = 0;
    
    /**
     * pageTitle
     *
     * @var string
     */
    protected $pageTitle = '';
    
    /**
     * subTitle
     *
     * @var string
     */
    protected $subTitle = '';
    
    /**
     * productNumber
     *
     * @var string
     */
    protected $productNumber = '';
    
    /**
     * ean
     *
     * @var string
     */
    protected $ean = '';
    
    /**
     * images
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $images = null;
    
    /**
     * price
     *
     * @var float
     */
    protected $price = false;
    
    /**
     * description
     *
     * @var string
     */
    protected $description = '';
    
    /**
     * description1
     *
     * @var string
     */
    protected $description1 = '';
    
    /**
     * description2
     *
     * @var string
     */
    protected $description2 = '';
    
    /**
     * description3
     *
     * @var string
     */
    protected $description3 = '';
    
    /**
     * taxRate
     *
     * @var \ZECHENDORF\Bazaar\Domain\Model\TaxRate
     */
    protected $taxRate = null;
    
    /**
     * productCombinations
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ZECHENDORF\Bazaar\Domain\Model\ProductCombination>
     * @cascade remove
     */
    protected $productCombinations = null;
    
    /**
     * volumeDiscounts
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ZECHENDORF\Bazaar\Domain\Model\VolumeDiscount>
     * @cascade remove
     * @lazy
     */
    protected $volumeDiscounts = null;
    
    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    /**
     * Returns the type
     *
     * @return int $type
     */
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * Sets the type
     *
     * @param int $type
     * @return void
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    
    /**
     * Returns the pageTitle
     *
     * @return string $pageTitle
     */
    public function getPageTitle()
    {
        return $this->pageTitle;
    }
    
    /**
     * Sets the pageTitle
     *
     * @param string $pageTitle
     * @return void
     */
    public function setPageTitle($pageTitle)
    {
        $this->pageTitle = $pageTitle;
    }
    
    /**
     * Returns the subTitle
     *
     * @return string $subTitle
     */
    public function getSubTitle()
    {
        return $this->subTitle;
    }
    
    /**
     * Sets the subTitle
     *
     * @param string $subTitle
     * @return void
     */
    public function setSubTitle($subTitle)
    {
        $this->subTitle = $subTitle;
    }
    
    /**
     * Returns the productNumber
     *
     * @return string $productNumber
     */
    public function getProductNumber()
    {
        return $this->productNumber;
    }
    
    /**
     * Sets the productNumber
     *
     * @param string $productNumber
     * @return void
     */
    public function setProductNumber($productNumber)
    {
        $this->productNumber = $productNumber;
    }
    
    /**
     * Returns the ean
     *
     * @return string $ean
     */
    public function getEan()
    {
        return $this->ean;
    }
    
    /**
     * Sets the ean
     *
     * @param string $ean
     * @return void
     */
    public function setEan($ean)
    {
        $this->ean = $ean;
    }
    
    /**
     * Returns the images
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $images
     */
    public function getImages()
    {
        return $this->images;
    }
    
    /**
     * Sets the images
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $images
     * @return void
     */
    public function setImages(\TYPO3\CMS\Extbase\Domain\Model\FileReference $images)
    {
        $this->images = $images;
    }
    
    /**
     * Returns the boolean state of price
     *
     * @return bool
     */
    public function isPrice()
    {
        return $this->price;
    }
    
    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    /**
     * Returns the description1
     *
     * @return string $description1
     */
    public function getDescription1()
    {
        return $this->description1;
    }
    
    /**
     * Sets the description1
     *
     * @param string $description1
     * @return void
     */
    public function setDescription1($description1)
    {
        $this->description1 = $description1;
    }
    
    /**
     * Returns the description2
     *
     * @return string $description2
     */
    public function getDescription2()
    {
        return $this->description2;
    }
    
    /**
     * Sets the description2
     *
     * @param string $description2
     * @return void
     */
    public function setDescription2($description2)
    {
        $this->description2 = $description2;
    }
    
    /**
     * Returns the description3
     *
     * @return string $description3
     */
    public function getDescription3()
    {
        return $this->description3;
    }
    
    /**
     * Sets the description3
     *
     * @param string $description3
     * @return void
     */
    public function setDescription3($description3)
    {
        $this->description3 = $description3;
    }
    
    /**
     * Returns the taxRate
     *
     * @return \ZECHENDORF\Bazaar\Domain\Model\TaxRate $taxRate
     */
    public function getTaxRate()
    {
        return $this->taxRate;
    }
    
    /**
     * Sets the taxRate
     *
     * @param \ZECHENDORF\Bazaar\Domain\Model\TaxRate $taxRate
     * @return void
     */
    public function setTaxRate(\ZECHENDORF\Bazaar\Domain\Model\TaxRate $taxRate)
    {
        $this->taxRate = $taxRate;
    }
    
    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }
    
    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->productCombinations = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->volumeDiscounts = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }
    
    /**
     * Adds a ProductCombination
     *
     * @param \ZECHENDORF\Bazaar\Domain\Model\ProductCombination $productCombination
     * @return void
     */
    public function addProductCombination(\ZECHENDORF\Bazaar\Domain\Model\ProductCombination $productCombination)
    {
        $this->productCombinations->attach($productCombination);
    }
    
    /**
     * Removes a ProductCombination
     *
     * @param \ZECHENDORF\Bazaar\Domain\Model\ProductCombination $productCombinationToRemove The ProductCombination to be removed
     * @return void
     */
    public function removeProductCombination(\ZECHENDORF\Bazaar\Domain\Model\ProductCombination $productCombinationToRemove)
    {
        $this->productCombinations->detach($productCombinationToRemove);
    }
    
    /**
     * Returns the productCombinations
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ZECHENDORF\Bazaar\Domain\Model\ProductCombination> $productCombinations
     */
    public function getProductCombinations()
    {
        return $this->productCombinations;
    }
    
    /**
     * Sets the productCombinations
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ZECHENDORF\Bazaar\Domain\Model\ProductCombination> $productCombinations
     * @return void
     */
    public function setProductCombinations(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $productCombinations)
    {
        $this->productCombinations = $productCombinations;
    }
    
    /**
     * Returns the price
     *
     * @return float price
     */
    public function getPrice()
    {
        return $this->price;
    }
    
    /**
     * Sets the price
     *
     * @param bool $price
     * @return void
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
    
    /**
     * Adds a VolumeDiscount
     *
     * @param \ZECHENDORF\Bazaar\Domain\Model\VolumeDiscount $volumeDiscount
     * @return void
     */
    public function addVolumeDiscount(\ZECHENDORF\Bazaar\Domain\Model\VolumeDiscount $volumeDiscount)
    {
        $this->volumeDiscounts->attach($volumeDiscount);
    }
    
    /**
     * Removes a VolumeDiscount
     *
     * @param \ZECHENDORF\Bazaar\Domain\Model\VolumeDiscount $volumeDiscountToRemove The VolumeDiscount to be removed
     * @return void
     */
    public function removeVolumeDiscount(\ZECHENDORF\Bazaar\Domain\Model\VolumeDiscount $volumeDiscountToRemove)
    {
        $this->volumeDiscounts->detach($volumeDiscountToRemove);
    }
    
    /**
     * Returns the volumeDiscounts
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ZECHENDORF\Bazaar\Domain\Model\VolumeDiscount> $volumeDiscounts
     */
    public function getVolumeDiscounts()
    {
        return $this->volumeDiscounts;
    }
    
    /**
     * Sets the volumeDiscounts
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ZECHENDORF\Bazaar\Domain\Model\VolumeDiscount> $volumeDiscounts
     * @return void
     */
    public function setVolumeDiscounts(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $volumeDiscounts)
    {
        $this->volumeDiscounts = $volumeDiscounts;
    }

}