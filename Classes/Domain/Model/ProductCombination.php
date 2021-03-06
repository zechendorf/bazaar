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
 * ProductCombination
 */
class ProductCombination extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * amount
     *
     * @var int
     */
    protected $amount = 0;
    
    /**
     * combinationProduct
     *
     * @var \ZECHENDORF\Bazaar\Domain\Model\Product
     */
    protected $combinationProduct = null;
    
    /**
     * Returns the amount
     *
     * @return int $amount
     */
    public function getAmount()
    {
        return $this->amount;
    }
    
    /**
     * Sets the amount
     *
     * @param int $amount
     * @return void
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }
    
    /**
     * Returns the combinationProduct
     *
     * @return \ZECHENDORF\Bazaar\Domain\Model\Product $combinationProduct
     */
    public function getCombinationProduct()
    {
        return $this->combinationProduct;
    }
    
    /**
     * Sets the combinationProduct
     *
     * @param \ZECHENDORF\Bazaar\Domain\Model\Product $combinationProduct
     * @return void
     */
    public function setCombinationProduct(\ZECHENDORF\Bazaar\Domain\Model\Product $combinationProduct)
    {
        $this->combinationProduct = $combinationProduct;
    }

}