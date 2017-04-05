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
 * Transactions
 */
class Transactions extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * transactionDate
     *
     * @var \DateTime
     */
    protected $transactionDate = null;
    
    /**
     * valutaDate
     *
     * @var \DateTime
     */
    protected $valutaDate = null;
    
    /**
     * debit
     *
     * @var float
     */
    protected $debit = 0.0;
    
    /**
     * credit
     *
     * @var float
     */
    protected $credit = 0.0;
    
    /**
     * description
     *
     * @var string
     */
    protected $description = '';
    
    /**
     * transactionId
     *
     * @var string
     */
    protected $transactionId = '';
    
    /**
     * sender
     *
     * @var string
     */
    protected $sender = '';
    
    /**
     * recipient
     *
     * @var string
     */
    protected $recipient = '';
    
    /**
     * identifier
     *
     * @var string
     */
    protected $identifier = '';
    
    /**
     * paymentType
     *
     * @var \ZECHENDORF\Bazaar\Domain\Model\PaymentType
     */
    protected $paymentType = null;
    
    /**
     * Returns the transactionDate
     *
     * @return \DateTime $transactionDate
     */
    public function getTransactionDate()
    {
        return $this->transactionDate;
    }
    
    /**
     * Sets the transactionDate
     *
     * @param \DateTime $transactionDate
     * @return void
     */
    public function setTransactionDate(\DateTime $transactionDate)
    {
        $this->transactionDate = $transactionDate;
    }
    
    /**
     * Returns the valutaDate
     *
     * @return \DateTime $valutaDate
     */
    public function getValutaDate()
    {
        return $this->valutaDate;
    }
    
    /**
     * Sets the valutaDate
     *
     * @param \DateTime $valutaDate
     * @return void
     */
    public function setValutaDate(\DateTime $valutaDate)
    {
        $this->valutaDate = $valutaDate;
    }
    
    /**
     * Returns the debit
     *
     * @return float $debit
     */
    public function getDebit()
    {
        return $this->debit;
    }
    
    /**
     * Sets the debit
     *
     * @param float $debit
     * @return void
     */
    public function setDebit($debit)
    {
        $this->debit = $debit;
    }
    
    /**
     * Returns the credit
     *
     * @return float $credit
     */
    public function getCredit()
    {
        return $this->credit;
    }
    
    /**
     * Sets the credit
     *
     * @param float $credit
     * @return void
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;
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
     * Returns the transactionId
     *
     * @return string $transactionId
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }
    
    /**
     * Sets the transactionId
     *
     * @param string $transactionId
     * @return void
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
    }
    
    /**
     * Returns the sender
     *
     * @return string $sender
     */
    public function getSender()
    {
        return $this->sender;
    }
    
    /**
     * Sets the sender
     *
     * @param string $sender
     * @return void
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
    }
    
    /**
     * Returns the recipient
     *
     * @return string $recipient
     */
    public function getRecipient()
    {
        return $this->recipient;
    }
    
    /**
     * Sets the recipient
     *
     * @param string $recipient
     * @return void
     */
    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;
    }
    
    /**
     * Returns the identifier
     *
     * @return string $identifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }
    
    /**
     * Sets the identifier
     *
     * @param string $identifier
     * @return void
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
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

}