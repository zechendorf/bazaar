<?php

namespace ZECHENDORF\Bazaar\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2017 Christopher Zechendorf <christopher@zechendorf.com>, ZECHENDORF
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \ZECHENDORF\Bazaar\Domain\Model\ShippingType.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Christopher Zechendorf <christopher@zechendorf.com>
 */
class ShippingTypeTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \ZECHENDORF\Bazaar\Domain\Model\ShippingType
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \ZECHENDORF\Bazaar\Domain\Model\ShippingType();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTitle()
		);
	}

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle()
	{
		$this->subject->setTitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'title',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCountriesReturnsInitialValueForCountry()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getCountries()
		);
	}

	/**
	 * @test
	 */
	public function setCountriesForObjectStorageContainingCountrySetsCountries()
	{
		$country = new \ZECHENDORF\Bazaar\Domain\Model\Country();
		$objectStorageHoldingExactlyOneCountries = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneCountries->attach($country);
		$this->subject->setCountries($objectStorageHoldingExactlyOneCountries);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneCountries,
			'countries',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addCountryToObjectStorageHoldingCountries()
	{
		$country = new \ZECHENDORF\Bazaar\Domain\Model\Country();
		$countriesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$countriesObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($country));
		$this->inject($this->subject, 'countries', $countriesObjectStorageMock);

		$this->subject->addCountry($country);
	}

	/**
	 * @test
	 */
	public function removeCountryFromObjectStorageHoldingCountries()
	{
		$country = new \ZECHENDORF\Bazaar\Domain\Model\Country();
		$countriesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$countriesObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($country));
		$this->inject($this->subject, 'countries', $countriesObjectStorageMock);

		$this->subject->removeCountry($country);

	}

	/**
	 * @test
	 */
	public function getShippingCostsReturnsInitialValueForShippingCost()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getShippingCosts()
		);
	}

	/**
	 * @test
	 */
	public function setShippingCostsForShippingCostSetsShippingCosts()
	{
		$shippingCostsFixture = new \ZECHENDORF\Bazaar\Domain\Model\ShippingCost();
		$this->subject->setShippingCosts($shippingCostsFixture);

		$this->assertAttributeEquals(
			$shippingCostsFixture,
			'shippingCosts',
			$this->subject
		);
	}
}
