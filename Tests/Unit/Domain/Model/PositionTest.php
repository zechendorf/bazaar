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
 * Test case for class \ZECHENDORF\Bazaar\Domain\Model\Position.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Christopher Zechendorf <christopher@zechendorf.com>
 */
class PositionTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \ZECHENDORF\Bazaar\Domain\Model\Position
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \ZECHENDORF\Bazaar\Domain\Model\Position();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getProductTitleReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getProductTitle()
		);
	}

	/**
	 * @test
	 */
	public function setProductTitleForStringSetsProductTitle()
	{
		$this->subject->setProductTitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'productTitle',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getDescription()
		);
	}

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription()
	{
		$this->subject->setDescription('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'description',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAmountReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getAmount()
		);
	}

	/**
	 * @test
	 */
	public function setAmountForStringSetsAmount()
	{
		$this->subject->setAmount('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'amount',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPriceReturnsInitialValueForFloat()
	{
		$this->assertSame(
			0.0,
			$this->subject->getPrice()
		);
	}

	/**
	 * @test
	 */
	public function setPriceForFloatSetsPrice()
	{
		$this->subject->setPrice(3.14159265);

		$this->assertAttributeEquals(
			3.14159265,
			'price',
			$this->subject,
			'',
			0.000000001
		);
	}

	/**
	 * @test
	 */
	public function getTaxPercentReturnsInitialValueForFloat()
	{
		$this->assertSame(
			0.0,
			$this->subject->getTaxPercent()
		);
	}

	/**
	 * @test
	 */
	public function setTaxPercentForFloatSetsTaxPercent()
	{
		$this->subject->setTaxPercent(3.14159265);

		$this->assertAttributeEquals(
			3.14159265,
			'taxPercent',
			$this->subject,
			'',
			0.000000001
		);
	}

	/**
	 * @test
	 */
	public function getProductReturnsInitialValueForProduct()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getProduct()
		);
	}

	/**
	 * @test
	 */
	public function setProductForProductSetsProduct()
	{
		$productFixture = new \ZECHENDORF\Bazaar\Domain\Model\Product();
		$this->subject->setProduct($productFixture);

		$this->assertAttributeEquals(
			$productFixture,
			'product',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTaxRateReturnsInitialValueForTaxRate()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getTaxRate()
		);
	}

	/**
	 * @test
	 */
	public function setTaxRateForTaxRateSetsTaxRate()
	{
		$taxRateFixture = new \ZECHENDORF\Bazaar\Domain\Model\TaxRate();
		$this->subject->setTaxRate($taxRateFixture);

		$this->assertAttributeEquals(
			$taxRateFixture,
			'taxRate',
			$this->subject
		);
	}
}
