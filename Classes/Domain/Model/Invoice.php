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
 * Invoice
 */
class Invoice extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
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
   * positions
   *
   * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ZECHENDORF\Bazaar\Domain\Model\Position>
   * @cascade remove
   */
  protected $positions = null;
  
  /**
   * payments
   *
   * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ZECHENDORF\Bazaar\Domain\Model\Payment>
   * @cascade remove
   */
  protected $payments = null;
  
  /**
   * txOrder
   *
   * @var \ZECHENDORF\Bazaar\Domain\Model\Order
   * @cascade remove
   */
  protected $txOrder = null;
  
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
    $this->payments = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
   * Adds a Payment
   *
   * @param \ZECHENDORF\Bazaar\Domain\Model\Payment $payment
   * @return void
   */
  public function addPayment(\ZECHENDORF\Bazaar\Domain\Model\Payment $payment)
  {
    $this->payments->attach($payment);
  }
  
  /**
   * Removes a Payment
   *
   * @param \ZECHENDORF\Bazaar\Domain\Model\Payment $paymentToRemove The Payment to be removed
   * @return void
   */
  public function removePayment(\ZECHENDORF\Bazaar\Domain\Model\Payment $paymentToRemove)
  {
    $this->payments->detach($paymentToRemove);
  }
  
  /**
   * Returns the payments
   *
   * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ZECHENDORF\Bazaar\Domain\Model\Payment> $payments
   */
  public function getPayments()
  {
    return $this->payments;
  }
  
  /**
   * Sets the payments
   *
   * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ZECHENDORF\Bazaar\Domain\Model\Payment> $payments
   * @return void
   */
  public function setPayments(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $payments)
  {
    $this->payments = $payments;
  }
  
  /**
   * Returns the txOrder
   *
   * @return \ZECHENDORF\Bazaar\Domain\Model\Order $txOrder
   */
  public function getTxOrder()
  {
    return $this->txOrder;
  }
  
  /**
   * Sets the txOrder
   *
   * @param \ZECHENDORF\Bazaar\Domain\Model\Order $txOrder
   * @return void
   */
  public function setTxOrder(\ZECHENDORF\Bazaar\Domain\Model\Order $txOrder)
  {
    $this->txOrder = $txOrder;
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
}
