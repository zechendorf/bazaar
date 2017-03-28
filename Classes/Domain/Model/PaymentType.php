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
 * PaymentType
 */
class PaymentType extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     *
     * @var string
     */
    protected $title = '';
    
    /**
     * price
     *
     * @var float
     */
    protected $price = 0.0;
    
    /**
     * countries
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ZECHENDORF\Bazaar\Domain\Model\Country>
     * @lazy
     */
    protected $countries = null;
    
    /**
     * userGroups
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FrontendUserGroup>
     * @lazy
     */
    protected $userGroups = null;
    
    /**
     * taxRate
     *
     * @var \ZECHENDORF\Bazaar\Domain\Model\TaxRate
     * @lazy
     */
    protected $taxRate = null;
    
    /**
     * discounts
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ZECHENDORF\Bazaar\Domain\Model\Discount>
     * @cascade remove
     * @lazy
     */
    protected $discounts = null;
    
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
        $this->countries = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->userGroups = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->discounts = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }
    
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
     * Adds a Country
     *
     * @param \ZECHENDORF\Bazaar\Domain\Model\Country $country
     * @return void
     */
    public function addCountry(\ZECHENDORF\Bazaar\Domain\Model\Country $country)
    {
        $this->countries->attach($country);
    }
    
    /**
     * Removes a Country
     *
     * @param \ZECHENDORF\Bazaar\Domain\Model\Country $countryToRemove The Country to be removed
     * @return void
     */
    public function removeCountry(\ZECHENDORF\Bazaar\Domain\Model\Country $countryToRemove)
    {
        $this->countries->detach($countryToRemove);
    }
    
    /**
     * Returns the countries
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ZECHENDORF\Bazaar\Domain\Model\Country> $countries
     */
    public function getCountries()
    {
        return $this->countries;
    }
    
    /**
     * Sets the countries
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ZECHENDORF\Bazaar\Domain\Model\Country> $countries
     * @return void
     */
    public function setCountries(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $countries)
    {
        $this->countries = $countries;
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
    
    /**
     * Adds a Discount
     *
     * @param \ZECHENDORF\Bazaar\Domain\Model\Discount $discount
     * @return void
     */
    public function addDiscount(\ZECHENDORF\Bazaar\Domain\Model\Discount $discount)
    {
        $this->discounts->attach($discount);
    }
    
    /**
     * Removes a Discount
     *
     * @param \ZECHENDORF\Bazaar\Domain\Model\Discount $discountToRemove The Discount to be removed
     * @return void
     */
    public function removeDiscount(\ZECHENDORF\Bazaar\Domain\Model\Discount $discountToRemove)
    {
        $this->discounts->detach($discountToRemove);
    }
    
    /**
     * Returns the discounts
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ZECHENDORF\Bazaar\Domain\Model\Discount> $discounts
     */
    public function getDiscounts()
    {
        return $this->discounts;
    }
    
    /**
     * Sets the discounts
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ZECHENDORF\Bazaar\Domain\Model\Discount> $discounts
     * @return void
     */
    public function setDiscounts(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $discounts)
    {
        $this->discounts = $discounts;
    }
    
    /**
     * Adds a FrontendUser
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FrontendUserGroup $userGroup
     * @return void
     */
    public function addUserGroup(\TYPO3\CMS\Extbase\Domain\Model\FrontendUserGroup $userGroup)
    {
        $this->userGroups->attach($userGroup);
    }
    
    /**
     * Removes a FrontendUser
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FrontendUserGroup $userGroupToRemove The FrontendUserGroup to be removed
     * @return void
     */
    public function removeUserGroup(\TYPO3\CMS\Extbase\Domain\Model\FrontendUserGroup $userGroupToRemove)
    {
        $this->userGroups->detach($userGroupToRemove);
    }
    
    /**
     * Returns the userGroups
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FrontendUserGroup> userGroups
     */
    public function getUserGroups()
    {
        return $this->userGroups;
    }
    
    /**
     * Sets the userGroups
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FrontendUserGroup> $userGroups
     * @return void
     */
    public function setUserGroups(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $userGroups)
    {
        $this->userGroups = $userGroups;
    }

}