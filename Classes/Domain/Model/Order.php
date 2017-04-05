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
 * Order
 */
class Order extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

  /**
   * date
   *
   * @var \DateTime
   */
  protected $date = null;
  
  /**
   * description
   *
   * @var string
   */
  protected $description = '';
  
  /**
   * invoiceAddress
   *
   * @var string
   */
  protected $invoiceAddress = '';
  
  /**
   * deliveryAddress
   *
   * @var string
   */
  protected $deliveryAddress = '';
  
  /**
   * user
   *
   * @var \TYPO3\CMS\Extbase\Domain\Model\FrontendUser
   * @lazy
   */
  protected $user = null;
  
  /**
   * billingAddressText
   *
   * @var \ZECHENDORF\Bazaar\Domain\Model\Address
   * @lazy
   */
  protected $billingAddressText = null;
  
  /**
   * deliveryAddressText
   *
   * @var \ZECHENDORF\Bazaar\Domain\Model\Address
   * @lazy
   */
  protected $deliveryAddressText = null;
  
  /**
   * positions
   *
   * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ZECHENDORF\Bazaar\Domain\Model\Position>
   * @cascade remove
   * @lazy
   */
  protected $positions = null;
  
  /**
   * vouchers
   *
   * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ZECHENDORF\Bazaar\Domain\Model\Voucher>
   */
  protected $vouchers = null;
  
  /**
   * paymentType
   *
   * @var \ZECHENDORF\Bazaar\Domain\Model\PaymentType
   * @lazy
   */
  protected $paymentType = null;
  
  /**
   * shippingType
   *
   * @var \ZECHENDORF\Bazaar\Domain\Model\ShippingType
   * @lazy
   */
  protected $shippingType = null;
  
  /**
   * shipments
   *
   * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ZECHENDORF\Bazaar\Domain\Model\Shipment>
   * @cascade remove
   * @lazy
   */
  protected $shipments = null;
  
  /**
   * invoices
   *
   * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ZECHENDORF\Bazaar\Domain\Model\Invoice>
   * @cascade remove
   * @lazy
   */
  protected $invoices = null;
  
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
    $this->positions = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    $this->vouchers = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    $this->shipments = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    $this->invoices = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
  }
  
  /**
   * Returns the date
   *
   * @return \DateTime $date
   */
  public function getDate()
  {
    return $this->date;
  }
  
  /**
   * Sets the date
   *
   * @param \DateTime $date
   * @return void
   */
  public function setDate(\DateTime $date)
  {
    $this->date = $date;
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
   * Returns the invoiceAddress
   *
   * @return string $invoiceAddress
   */
  public function getInvoiceAddress()
  {
    return $this->invoiceAddress;
  }
  
  /**
   * Sets the invoiceAddress
   *
   * @param string $invoiceAddress
   * @return void
   */
  public function setInvoiceAddress($invoiceAddress)
  {
    $this->invoiceAddress = $invoiceAddress;
  }
  
  /**
   * Returns the deliveryAddress
   *
   * @return string $deliveryAddress
   */
  public function getDeliveryAddress()
  {
    return $this->deliveryAddress;
  }
  
  /**
   * Sets the deliveryAddress
   *
   * @param string $deliveryAddress
   * @return void
   */
  public function setDeliveryAddress($deliveryAddress)
  {
    $this->deliveryAddress = $deliveryAddress;
  }
  
  /**
   * Returns the user
   *
   * @return \TYPO3\CMS\Extbase\Domain\Model\FrontendUser $user
   */
  public function getUser()
  {
    return $this->user;
  }
  
  /**
   * Sets the user
   *
   * @param \TYPO3\CMS\Extbase\Domain\Model\FrontendUser $user
   * @return void
   */
  public function setUser(\TYPO3\CMS\Extbase\Domain\Model\FrontendUser $user)
  {
    $this->user = $user;
  }
  
  /**
   * Returns the billingAddressText
   *
   * @return \ZECHENDORF\Bazaar\Domain\Model\Address $billingAddressText
   */
  public function getBillingAddressText()
  {
    return $this->billingAddressText;
  }
  
  /**
   * Sets the billingAddressText
   *
   * @param \ZECHENDORF\Bazaar\Domain\Model\Address $billingAddressText
   * @return void
   */
  public function setBillingAddressText(\ZECHENDORF\Bazaar\Domain\Model\Address $billingAddressText)
  {
    $this->billingAddressText = $billingAddressText;
  }
  
  /**
   * Returns the deliveryAddressText
   *
   * @return \ZECHENDORF\Bazaar\Domain\Model\Address $deliveryAddressText
   */
  public function getDeliveryAddressText()
  {
    return $this->deliveryAddressText;
  }
  
  /**
   * Sets the deliveryAddressText
   *
   * @param \ZECHENDORF\Bazaar\Domain\Model\Address $deliveryAddressText
   * @return void
   */
  public function setDeliveryAddressText(\ZECHENDORF\Bazaar\Domain\Model\Address $deliveryAddressText)
  {
    $this->deliveryAddressText = $deliveryAddressText;
  }
  
  /**
   * Adds a Position
   *
   * @param \ZECHENDORF\Bazaar\Domain\Model\Position $position
   * @return void
   */
  public function addPosition(\ZECHENDORF\Bazaar\Domain\Model\Position $position)
  {
    $this->positions->attach($position);
  }
  
  /**
   * Removes a Position
   *
   * @param \ZECHENDORF\Bazaar\Domain\Model\Position $positionToRemove The Position to be removed
   * @return void
   */
  public function removePosition(\ZECHENDORF\Bazaar\Domain\Model\Position $positionToRemove)
  {
    $this->positions->detach($positionToRemove);
  }
  
  /**
   * Returns the positions
   *
   * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ZECHENDORF\Bazaar\Domain\Model\Position> $positions
   */
  public function getPositions()
  {
      return $this->positions;
  }
  
  /**
   * Sets the positions
   *
   * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ZECHENDORF\Bazaar\Domain\Model\Position> $positions
   * @return void
   */
  public function setPositions(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $positions)
  {
      $this->positions = $positions;
  }
  
  /**
   * Adds a Voucher
   *
   * @param \ZECHENDORF\Bazaar\Domain\Model\Voucher $voucher
   * @return void
   */
  public function addVoucher(\ZECHENDORF\Bazaar\Domain\Model\Voucher $voucher)
  {
    $this->vouchers->attach($voucher);
  }
  
  /**
   * Removes a Voucher
   *
   * @param \ZECHENDORF\Bazaar\Domain\Model\Voucher $voucherToRemove The Voucher to be removed
   * @return void
   */
  public function removeVoucher(\ZECHENDORF\Bazaar\Domain\Model\Voucher $voucherToRemove)
  {
    $this->vouchers->detach($voucherToRemove);
  }
  
  /**
   * Returns the vouchers
   *
   * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ZECHENDORF\Bazaar\Domain\Model\Voucher> $vouchers
   */
  public function getVouchers()
  {
    return $this->vouchers;
  }
  
  /**
   * Sets the vouchers
   *
   * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ZECHENDORF\Bazaar\Domain\Model\Voucher> $vouchers
   * @return void
   */
  public function setVouchers(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $vouchers)
  {
    $this->vouchers = $vouchers;
  }
  
  /**
   * Returns the paymentType
   *
   * @return \ZECHENDORF\Bazaar\Domain\Model\PaymentType $paymentType
   */
  public function getPaymentType()
  {
    return $this->paymentType;
  }
  
  /**
   * Sets the paymentType
   *
   * @param \ZECHENDORF\Bazaar\Domain\Model\PaymentType $paymentType
   * @return void
   */
  public function setPaymentType(\ZECHENDORF\Bazaar\Domain\Model\PaymentType $paymentType)
  {
    $this->paymentType = $paymentType;
  }
  
  /**
   * Returns the shippingType
   *
   * @return \ZECHENDORF\Bazaar\Domain\Model\ShippingType $shippingType
   */
  public function getShippingType()
  {
    return $this->shippingType;
  }
  
  /**
   * Sets the shippingType
   *
   * @param \ZECHENDORF\Bazaar\Domain\Model\ShippingType $shippingType
   * @return void
   */
  public function setShippingType(\ZECHENDORF\Bazaar\Domain\Model\ShippingType $shippingType)
  {
    $this->shippingType = $shippingType;
  }
  
  /**
   * Adds a Shipment
   *
   * @param \ZECHENDORF\Bazaar\Domain\Model\Shipment $shipment
   * @return void
   */
  public function addShipment(\ZECHENDORF\Bazaar\Domain\Model\Shipment $shipment)
  {
    $this->shipments->attach($shipment);
  }
  
  /**
   * Removes a Shipment
   *
   * @param \ZECHENDORF\Bazaar\Domain\Model\Shipment $shipmentToRemove The Shipment to be removed
   * @return void
   */
  public function removeShipment(\ZECHENDORF\Bazaar\Domain\Model\Shipment $shipmentToRemove)
  {
    $this->shipments->detach($shipmentToRemove);
  }
  
  /**
   * Returns the shipments
   *
   * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ZECHENDORF\Bazaar\Domain\Model\Shipment> $shipments
   */
  public function getShipments()
  {
    return $this->shipments;
  }
  
  /**
   * Sets the shipments
   *
   * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ZECHENDORF\Bazaar\Domain\Model\Shipment> $shipments
   * @return void
   */
  public function setShipments(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $shipments)
  {
    $this->shipments = $shipments;
  }
  
  /**
   * Adds a Invoice
   *
   * @param \ZECHENDORF\Bazaar\Domain\Model\Invoice $invoice
   * @return void
   */
  public function addInvoice(\ZECHENDORF\Bazaar\Domain\Model\Invoice $invoice)
  {
    $this->invoices->attach($invoice);
  }
  
  /**
   * Removes a Invoice
   *
   * @param \ZECHENDORF\Bazaar\Domain\Model\Invoice $invoiceToRemove The Invoice to be removed
   * @return void
   */
  public function removeInvoice(\ZECHENDORF\Bazaar\Domain\Model\Invoice $invoiceToRemove)
  {
    $this->invoices->detach($invoiceToRemove);
  }
  
  /**
   * Returns the invoices
   *
   * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ZECHENDORF\Bazaar\Domain\Model\Invoice> $invoices
   */
  public function getInvoices()
  {
    return $this->invoices;
  }
  
  /**
   * Sets the invoices
   *
   * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ZECHENDORF\Bazaar\Domain\Model\Invoice> $invoices
   * @return void
   */
  public function setInvoices(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $invoices)
  {
    $this->invoices = $invoices;
  }

  /**
   * Returns the sum
   *
   * @return double $sum
   */
  public function getSum()
  {
    foreach($this->getPositions() as $position){
      $sum += $position->getAmount()*$position->getPrice();
    }
    return $sum;
  }
  
  /**
   * Returns the taxes
   *
   * @return array $taxes
   */
  public function getTaxes()
  {
    foreach($this->getPositions() as $position){
      $taxes[$position->getTaxPercent()] += $position->getTaxPercent()*$position->getAmount()*$position->getPrice()/100;
    }
    return $taxes;
  }
  
  /**
   * Returns the total
   *
   * @return double $total
   */
  public function getTotal()
  {
    $taxes = $this->getTaxes();
    $total = $this->getSum();
    foreach($taxes as $tax){
      $total += $tax;
    }
    return $total;
  }
}
