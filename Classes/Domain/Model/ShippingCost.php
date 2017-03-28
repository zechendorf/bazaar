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
 * ShippingCost
 */
class ShippingCost extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * maxWeight
     *
     * @var int
     * @validate NotEmpty
     */
    protected $maxWeight = 0;
    
    /**
     * price
     *
     * @var float
     */
    protected $price = 0.0;
    
    /**
     * taxRate
     *
     * @var \ZECHENDORF\Bazaar\Domain\Model\TaxRate
     */
    protected $taxRate = null;
    
    /**
     * Returns the maxWeight
     *
     * @return int $maxWeight
     */
    public function getMaxWeight()
    {
        return $this->maxWeight;
    }
    
    /**
     * Sets the maxWeight
     *
     * @param int $maxWeight
     * @return void
     */
    public function setMaxWeight($maxWeight)
    {
        $this->maxWeight = $maxWeight;
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