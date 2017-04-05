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
 * ProductRating
 */
class ProductRating extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     *
     * @var string
     */
    protected $title = '';
    
    /**
     * text
     *
     * @var string
     */
    protected $text = '';
    
    /**
     * rating
     *
     * @var int
     */
    protected $rating = 0;
    
    /**
     * user
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FrontendUser
     * @lazy
     */
    protected $user = null;
    
    /**
     * product
     *
     * @var \ZECHENDORF\Bazaar\Domain\Model\Product
     */
    protected $product = null;
    
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
     * Returns the text
     *
     * @return string $text
     */
    public function getText()
    {
        return $this->text;
    }
    
    /**
     * Sets the text
     *
     * @param string $text
     * @return void
     */
    public function setText($text)
    {
        $this->text = $text;
    }
    
    /**
     * Returns the rating
     *
     * @return int $rating
     */
    public function getRating()
    {
        return $this->rating;
    }
    
    /**
     * Sets the rating
     *
     * @param int $rating
     * @return void
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
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
     * Returns the product
     *
     * @return \ZECHENDORF\Bazaar\Domain\Model\Product $product
     */
    public function getProduct()
    {
        return $this->product;
    }
    
    /**
     * Sets the product
     *
     * @param \ZECHENDORF\Bazaar\Domain\Model\Product $product
     * @return void
     */
    public function setProduct(\ZECHENDORF\Bazaar\Domain\Model\Product $product)
    {
        $this->product = $product;
    }

}