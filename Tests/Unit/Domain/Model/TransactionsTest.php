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
 * Test case for class \ZECHENDORF\Bazaar\Domain\Model\Transactions.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Christopher Zechendorf <christopher@zechendorf.com>
 */
class TransactionsTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \ZECHENDORF\Bazaar\Domain\Model\Transactions
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \ZECHENDORF\Bazaar\Domain\Model\Transactions();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getTransactionDateReturnsInitialValueForDateTime()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getTransactionDate()
		);
	}

	/**
	 * @test
	 */
	public function setTransactionDateForDateTimeSetsTransactionDate()
	{
		$dateTimeFixture = new \DateTime();
		$this->subject->setTransactionDate($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'transactionDate',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getValutaDateReturnsInitialValueForDateTime()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getValutaDate()
		);
	}

	/**
	 * @test
	 */
	public function setValutaDateForDateTimeSetsValutaDate()
	{
		$dateTimeFixture = new \DateTime();
		$this->subject->setValutaDate($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'valutaDate',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDebitReturnsInitialValueForFloat()
	{
		$this->assertSame(
			0.0,
			$this->subject->getDebit()
		);
	}

	/**
	 * @test
	 */
	public function setDebitForFloatSetsDebit()
	{
		$this->subject->setDebit(3.14159265);

		$this->assertAttributeEquals(
			3.14159265,
			'debit',
			$this->subject,
			'',
			0.000000001
		);
	}

	/**
	 * @test
	 */
	public function getCreditReturnsInitialValueForFloat()
	{
		$this->assertSame(
			0.0,
			$this->subject->getCredit()
		);
	}

	/**
	 * @test
	 */
	public function setCreditForFloatSetsCredit()
	{
		$this->subject->setCredit(3.14159265);

		$this->assertAttributeEquals(
			3.14159265,
			'credit',
			$this->subject,
			'',
			0.000000001
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
	public function getTransactionIdReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTransactionId()
		);
	}

	/**
	 * @test
	 */
	public function setTransactionIdForStringSetsTransactionId()
	{
		$this->subject->setTransactionId('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'transactionId',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSenderReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getSender()
		);
	}

	/**
	 * @test
	 */
	public function setSenderForStringSetsSender()
	{
		$this->subject->setSender('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'sender',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getRecipientReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getRecipient()
		);
	}

	/**
	 * @test
	 */
	public function setRecipientForStringSetsRecipient()
	{
		$this->subject->setRecipient('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'recipient',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getIdentifierReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getIdentifier()
		);
	}

	/**
	 * @test
	 */
	public function setIdentifierForStringSetsIdentifier()
	{
		$this->subject->setIdentifier('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'identifier',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPaymentTypeReturnsInitialValueForPaymentType()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getPaymentType()
		);
	}

	/**
	 * @test
	 */
	public function setPaymentTypeForPaymentTypeSetsPaymentType()
	{
		$paymentTypeFixture = new \ZECHENDORF\Bazaar\Domain\Model\PaymentType();
		$this->subject->setPaymentType($paymentTypeFixture);

		$this->assertAttributeEquals(
			$paymentTypeFixture,
			'paymentType',
			$this->subject
		);
	}
}
