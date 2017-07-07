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
 * Position
 */
class Position extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * productTitle
     *
     * @var string
     */
    protected $productTitle = '';
    
    /**
     * description
     *
     * @var string
     */
    protected $description = '';
    
    /**
     * amount
     *
     * @var string
     */
    protected $amount = '';
    
    /**
     * price
     *
     * @var float
     */
    protected $price = 0.0;
    
    /**
     * taxPercent
     *
     * @var float
     */
    protected $taxPercent = 0.0;
    
    /**
     * product
     *
     * @var \ZECHENDORF\Bazaar\Domain\Model\Product
     * @lazy
     */
    protected $product = null;
    
    /**
     * taxRate
     *
     * @var \ZECHENDORF\Bazaar\Domain\Model\TaxRate
     */
    protected $taxRate = null;
    
    /**
     * Returns the productTitle
     *
     * @return string $productTitle
     */
    public function getProductTitle()
    {
        return $this->productTitle;
    }
    
    /**
     * Sets the productTitle
     *
     * @param string $productTitle
     * @return void
     */
    public function setProductTitle($productTitle)
    {
        $this->productTitle = $productTitle;
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
     * Returns the amount
     *
     * @return string $amount
     */
    public function getAmount()
    {
        return $this->amount;
    }
    
    /**
     * Sets the amount
     *
     * @param string $amount
     * @return void
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }
    
    /**
     * Returns the price
     *
     * @return float $price
     */
    public function getPrice()
    {
        return $this->price;
    }
    
    /**
     * Sets the price
     *
     * @param float $price
     * @return void
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
    
    /**
     * Returns the taxPercent
     *
     * @return float $taxPercent
     */
    public function getTaxPercent()
    {
        return $this->taxPercent;
    }
    
    /**
     * Sets the taxPercent
     *
     * @param float $taxPercent
     * @return void
     */
    public function setTaxPercent($taxPercent)
    {
        $this->taxPercent = $taxPercent;
    }
    
    /**
     * Returns the product
     *
     * @return \ZECHENDORF\Bazaar\Domain\Model\Product $product
     */
    public function getProduct()
    {
        return $this->product;
    }
    
    /**
     * Sets the product
     *
     * @param \ZECHENDORF\Bazaar\Domain\Model\Product $product
     * @return void
     */
    public function setProduct(\ZECHENDORF\Bazaar\Domain\Model\Product $product)
    {
        $this->product = $product;
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

}