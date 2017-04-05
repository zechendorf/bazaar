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
 * Test case for class \ZECHENDORF\Bazaar\Domain\Model\Order.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Christopher Zechendorf <christopher@zechendorf.com>
 */
class OrderTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \ZECHENDORF\Bazaar\Domain\Model\Order
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \ZECHENDORF\Bazaar\Domain\Model\Order();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getDateReturnsInitialValueForDateTime()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getDate()
		);
	}

	/**
	 * @test
	 */
	public function setDateForDateTimeSetsDate()
	{
		$dateTimeFixture = new \DateTime();
		$this->subject->setDate($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'date',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getInvoiceAddressReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getInvoiceAddress()
		);
	}

	/**
	 * @test
	 */
	public function setInvoiceAddressForStringSetsInvoiceAddress()
	{
		$this->subject->setInvoiceAddress('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'invoiceAddress',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDeliveryAddressReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getDeliveryAddress()
		);
	}

	/**
	 * @test
	 */
	public function setDeliveryAddressForStringSetsDeliveryAddress()
	{
		$this->subject->setDeliveryAddress('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'deliveryAddress',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getUserReturnsInitialValueForFrontendUser()
	{	}

	/**
	 * @test
	 */
	public function setUserForFrontendUserSetsUser()
	{	}

	/**
	 * @test
	 */
	public function getBillingAddressTextReturnsInitialValueForAddress()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getBillingAddressText()
		);
	}

	/**
	 * @test
	 */
	public function setBillingAddressTextForAddressSetsBillingAddressText()
	{
		$billingAddressTextFixture = new \ZECHENDORF\Bazaar\Domain\Model\Address();
		$this->subject->setBillingAddressText($billingAddressTextFixture);

		$this->assertAttributeEquals(
			$billingAddressTextFixture,
			'billingAddressText',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDeliveryAddressTextReturnsInitialValueForAddress()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getDeliveryAddressText()
		);
	}

	/**
	 * @test
	 */
	public function setDeliveryAddressTextForAddressSetsDeliveryAddressText()
	{
		$deliveryAddressTextFixture = new \ZECHENDORF\Bazaar\Domain\Model\Address();
		$this->subject->setDeliveryAddressText($deliveryAddressTextFixture);

		$this->assertAttributeEquals(
			$deliveryAddressTextFixture,
			'deliveryAddressText',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPositionsReturnsInitialValueForPosition()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getPositions()
		);
	}

	/**
	 * @test
	 */
	public function setPositionsForObjectStorageContainingPositionSetsPositions()
	{
		$position = new \ZECHENDORF\Bazaar\Domain\Model\Position();
		$objectStorageHoldingExactlyOnePositions = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOnePositions->attach($position);
		$this->subject->setPositions($objectStorageHoldingExactlyOnePositions);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOnePositions,
			'positions',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addPositionToObjectStorageHoldingPositions()
	{
		$position = new \ZECHENDORF\Bazaar\Domain\Model\Position();
		$positionsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$positionsObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($position));
		$this->inject($this->subject, 'positions', $positionsObjectStorageMock);

		$this->subject->addPosition($position);
	}

	/**
	 * @test
	 */
	public function removePositionFromObjectStorageHoldingPositions()
	{
		$position = new \ZECHENDORF\Bazaar\Domain\Model\Position();
		$positionsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$positionsObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($position));
		$this->inject($this->subject, 'positions', $positionsObjectStorageMock);

		$this->subject->removePosition($position);

	}

	/**
	 * @test
	 */
	public function getVouchersReturnsInitialValueForVoucher()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getVouchers()
		);
	}

	/**
	 * @test
	 */
	public function setVouchersForObjectStorageContainingVoucherSetsVouchers()
	{
		$voucher = new \ZECHENDORF\Bazaar\Domain\Model\Voucher();
		$objectStorageHoldingExactlyOneVouchers = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneVouchers->attach($voucher);
		$this->subject->setVouchers($objectStorageHoldingExactlyOneVouchers);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneVouchers,
			'vouchers',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addVoucherToObjectStorageHoldingVouchers()
	{
		$voucher = new \ZECHENDORF\Bazaar\Domain\Model\Voucher();
		$vouchersObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$vouchersObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($voucher));
		$this->inject($this->subject, 'vouchers', $vouchersObjectStorageMock);

		$this->subject->addVoucher($voucher);
	}

	/**
	 * @test
	 */
	public function removeVoucherFromObjectStorageHoldingVouchers()
	{
		$voucher = new \ZECHENDORF\Bazaar\Domain\Model\Voucher();
		$vouchersObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$vouchersObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($voucher));
		$this->inject($this->subject, 'vouchers', $vouchersObjectStorageMock);

		$this->subject->removeVoucher($voucher);

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

	/**
	 * @test
	 */
	public function getShippingTypeReturnsInitialValueForShippingType()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getShippingType()
		);
	}

	/**
	 * @test
	 */
	public function setShippingTypeForShippingTypeSetsShippingType()
	{
		$shippingTypeFixture = new \ZECHENDORF\Bazaar\Domain\Model\ShippingType();
		$this->subject->setShippingType($shippingTypeFixture);

		$this->assertAttributeEquals(
			$shippingTypeFixture,
			'shippingType',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getShipmentsReturnsInitialValueForShipment()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getShipments()
		);
	}

	/**
	 * @test
	 */
	public function setShipmentsForObjectStorageContainingShipmentSetsShipments()
	{
		$shipment = new \ZECHENDORF\Bazaar\Domain\Model\Shipment();
		$objectStorageHoldingExactlyOneShipments = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneShipments->attach($shipment);
		$this->subject->setShipments($objectStorageHoldingExactlyOneShipments);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneShipments,
			'shipments',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addShipmentToObjectStorageHoldingShipments()
	{
		$shipment = new \ZECHENDORF\Bazaar\Domain\Model\Shipment();
		$shipmentsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$shipmentsObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($shipment));
		$this->inject($this->subject, 'shipments', $shipmentsObjectStorageMock);

		$this->subject->addShipment($shipment);
	}

	/**
	 * @test
	 */
	public function removeShipmentFromObjectStorageHoldingShipments()
	{
		$shipment = new \ZECHENDORF\Bazaar\Domain\Model\Shipment();
		$shipmentsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$shipmentsObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($shipment));
		$this->inject($this->subject, 'shipments', $shipmentsObjectStorageMock);

		$this->subject->removeShipment($shipment);

	}

	/**
	 * @test
	 */
	public function getInvoicesReturnsInitialValueForInvoice()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getInvoices()
		);
	}

	/**
	 * @test
	 */
	public function setInvoicesForObjectStorageContainingInvoiceSetsInvoices()
	{
		$invoice = new \ZECHENDORF\Bazaar\Domain\Model\Invoice();
		$objectStorageHoldingExactlyOneInvoices = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneInvoices->attach($invoice);
		$this->subject->setInvoices($objectStorageHoldingExactlyOneInvoices);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneInvoices,
			'invoices',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addInvoiceToObjectStorageHoldingInvoices()
	{
		$invoice = new \ZECHENDORF\Bazaar\Domain\Model\Invoice();
		$invoicesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$invoicesObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($invoice));
		$this->inject($this->subject, 'invoices', $invoicesObjectStorageMock);

		$this->subject->addInvoice($invoice);
	}

	/**
	 * @test
	 */
	public function removeInvoiceFromObjectStorageHoldingInvoices()
	{
		$invoice = new \ZECHENDORF\Bazaar\Domain\Model\Invoice();
		$invoicesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$invoicesObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($invoice));
		$this->inject($this->subject, 'invoices', $invoicesObjectStorageMock);

		$this->subject->removeInvoice($invoice);

	}
}
