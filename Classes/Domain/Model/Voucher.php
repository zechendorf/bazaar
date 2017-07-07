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
 * Voucher
 */
class Voucher extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     *
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';
    
    /**
     * type
     *
     * @var int
     */
    protected $type = 0;
    
    /**
     * userGroup
     *
     * @var int
     */
    protected $userGroup = 0;
    
    /**
     * voucherCode
     *
     * @var string
     */
    protected $voucherCode = '';
    
    /**
     * multiple
     *
     * @var bool
     */
    protected $multiple = false;
    
    /**
     * minimumCartValue
     *
     * @var float
     */
    protected $minimumCartValue = 0.0;
    
    /**
     * voucherAbsolute
     *
     * @var float
     */
    protected $voucherAbsolute = 0.0;
    
    /**
     * voucherPercent
     *
     * @var float
     */
    protected $voucherPercent = 0.0;
    
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
     * Returns the type
     *
     * @return int $type
     */
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * Sets the type
     *
     * @param int $type
     * @return void
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    
    /**
     * Returns the userGroup
     *
     * @return int $userGroup
     */
    public function getUserGroup()
    {
        return $this->userGroup;
    }
    
    /**
     * Sets the userGroup
     *
     * @param int $userGroup
     * @return void
     */
    public function setUserGroup($userGroup)
    {
        $this->userGroup = $userGroup;
    }
    
    /**
     * Returns the voucherCode
     *
     * @return string $voucherCode
     */
    public function getVoucherCode()
    {
        return $this->voucherCode;
    }
    
    /**
     * Sets the voucherCode
     *
     * @param string $voucherCode
     * @return void
     */
    public function setVoucherCode($voucherCode)
    {
        $this->voucherCode = $voucherCode;
    }
    
    /**
     * Returns the multiple
     *
     * @return bool $multiple
     */
    public function getMultiple()
    {
        return $this->multiple;
    }
    
    /**
     * Sets the multiple
     *
     * @param bool $multiple
     * @return void
     */
    public function setMultiple($multiple)
    {
        $this->multiple = $multiple;
    }
    
    /**
     * Returns the boolean state of multiple
     *
     * @return bool
     */
    public function isMultiple()
    {
        return $this->multiple;
    }
    
    /**
     * Returns the minimumCartValue
     *
     * @return float $minimumCartValue
     */
    public function getMinimumCartValue()
    {
        return $this->minimumCartValue;
    }
    
    /**
     * Sets the minimumCartValue
     *
     * @param float $minimumCartValue
     * @return void
     */
    public function setMinimumCartValue($minimumCartValue)
    {
        $this->minimumCartValue = $minimumCartValue;
    }
    
    /**
     * Returns the voucherAbsolute
     *
     * @return float $voucherAbsolute
     */
    public function getVoucherAbsolute()
    {
        return $this->voucherAbsolute;
    }
    
    /**
     * Sets the voucherAbsolute
     *
     * @param float $voucherAbsolute
     * @return void
     */
    public function setVoucherAbsolute($voucherAbsolute)
    {
        $this->voucherAbsolute = $voucherAbsolute;
    }
    
    /**
     * Returns the voucherPercent
     *
     * @return float $voucherPercent
     */
    public function getVoucherPercent()
    {
        return $this->voucherPercent;
    }
    
    /**
     * Sets the voucherPercent
     *
     * @param float $voucherPercent
     * @return void
     */
    public function setVoucherPercent($voucherPercent)
    {
        $this->voucherPercent = $voucherPercent;
    }

}