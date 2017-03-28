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
 * Shipment
 */
class Shipment extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * date
     *
     * @var \DateTime
     */
    protected $date = null;
    
    /**
     * shippingId
     *
     * @var string
     */
    protected $shippingId = '';
    
    /**
     * trackingUrl
     *
     * @var string
     */
    protected $trackingUrl = '';
    
    /**
     * description
     *
     * @var string
     */
    protected $description = '';
    
    /**
     * internalComment
     *
     * @var string
     */
    protected $internalComment = '';
    
    /**
     * positions
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ZECHENDORF\Bazaar\Domain\Model\Position>
     * @cascade remove
     */
    protected $positions = null;
    
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
    }
    
    /**
     * Returns the shippingId
     *
     * @return string $shippingId
     */
    public function getShippingId()
    {
        return $this->shippingId;
    }
    
    /**
     * Sets the shippingId
     *
     * @param string $shippingId
     * @return void
     */
    public function setShippingId($shippingId)
    {
        $this->shippingId = $shippingId;
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
     * Returns the internalComment
     *
     * @return string $internalComment
     */
    public function getInternalComment()
    {
        return $this->internalComment;
    }
    
    /**
     * Sets the internalComment
     *
     * @param string $internalComment
     * @return void
     */
    public function setInternalComment($internalComment)
    {
        $this->internalComment = $internalComment;
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
     * Returns the trackingUrl
     *
     * @return string $trackingUrl
     */
    public function getTrackingUrl()
    {
        return $this->trackingUrl;
    }
    
    /**
     * Sets the trackingUrl
     *
     * @param string $trackingUrl
     * @return void
     */
    public function setTrackingUrl($trackingUrl)
    {
        $this->trackingUrl = $trackingUrl;
    }

}