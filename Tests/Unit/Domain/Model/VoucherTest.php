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
 * Test case for class \ZECHENDORF\Bazaar\Domain\Model\Voucher.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Christopher Zechendorf <christopher@zechendorf.com>
 */
class VoucherTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \ZECHENDORF\Bazaar\Domain\Model\Voucher
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \ZECHENDORF\Bazaar\Domain\Model\Voucher();
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
	public function getTypeReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTypeForIntSetsType()
	{	}

	/**
	 * @test
	 */
	public function getUserGroupReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setUserGroupForIntSetsUserGroup()
	{	}

	/**
	 * @test
	 */
	public function getVoucherCodeReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getVoucherCode()
		);
	}

	/**
	 * @test
	 */
	public function setVoucherCodeForStringSetsVoucherCode()
	{
		$this->subject->setVoucherCode('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'voucherCode',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMultipleReturnsInitialValueForBool()
	{
		$this->assertSame(
			FALSE,
			$this->subject->getMultiple()
		);
	}

	/**
	 * @test
	 */
	public function setMultipleForBoolSetsMultiple()
	{
		$this->subject->setMultiple(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'multiple',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMinimumCartValueReturnsInitialValueForFloat()
	{
		$this->assertSame(
			0.0,
			$this->subject->getMinimumCartValue()
		);
	}

	/**
	 * @test
	 */
	public function setMinimumCartValueForFloatSetsMinimumCartValue()
	{
		$this->subject->setMinimumCartValue(3.14159265);

		$this->assertAttributeEquals(
			3.14159265,
			'minimumCartValue',
			$this->subject,
			'',
			0.000000001
		);
	}

	/**
	 * @test
	 */
	public function getVoucherAbsoluteReturnsInitialValueForFloat()
	{
		$this->assertSame(
			0.0,
			$this->subject->getVoucherAbsolute()
		);
	}

	/**
	 * @test
	 */
	public function setVoucherAbsoluteForFloatSetsVoucherAbsolute()
	{
		$this->subject->setVoucherAbsolute(3.14159265);

		$this->assertAttributeEquals(
			3.14159265,
			'voucherAbsolute',
			$this->subject,
			'',
			0.000000001
		);
	}

	/**
	 * @test
	 */
	public function getVoucherPercentReturnsInitialValueForFloat()
	{
		$this->assertSame(
			0.0,
			$this->subject->getVoucherPercent()
		);
	}

	/**
	 * @test
	 */
	public function setVoucherPercentForFloatSetsVoucherPercent()
	{
		$this->subject->setVoucherPercent(3.14159265);

		$this->assertAttributeEquals(
			3.14159265,
			'voucherPercent',
			$this->subject,
			'',
			0.000000001
		);
	}
}
