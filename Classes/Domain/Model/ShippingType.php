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
 * ShippingType
 */
class ShippingType extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     *
     * @var string
     */
    protected $title = '';
    
    /**
     * countries
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ZECHENDORF\Bazaar\Domain\Model\Country>
     */
    protected $countries = null;
    
    /**
     * shippingCosts
     *
     * @var \ZECHENDORF\Bazaar\Domain\Model\ShippingCost
     */
    protected $shippingCosts = null;
    
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
     * Returns the shippingCosts
     *
     * @return \ZECHENDORF\Bazaar\Domain\Model\ShippingCost $shippingCosts
     */
    public function getShippingCosts()
    {
        return $this->shippingCosts;
    }
    
    /**
     * Sets the shippingCosts
     *
     * @param \ZECHENDORF\Bazaar\Domain\Model\ShippingCost $shippingCosts
     * @return void
     */
    public function setShippingCosts(\ZECHENDORF\Bazaar\Domain\Model\ShippingCost $shippingCosts)
    {
        $this->shippingCosts = $shippingCosts;
    }

}