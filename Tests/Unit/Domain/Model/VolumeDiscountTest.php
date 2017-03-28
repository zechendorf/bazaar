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
 * Test case for class \ZECHENDORF\Bazaar\Domain\Model\VolumeDiscount.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Christopher Zechendorf <christopher@zechendorf.com>
 */
class VolumeDiscountTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \ZECHENDORF\Bazaar\Domain\Model\VolumeDiscount
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \ZECHENDORF\Bazaar\Domain\Model\VolumeDiscount();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getAmountReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setAmountForIntSetsAmount()
	{	}

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
	public function getUserGroupsReturnsInitialValueForFrontendUserGroup()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getUserGroups()
		);
	}

	/**
	 * @test
	 */
	public function setUserGroupsForObjectStorageContainingFrontendUserGroupSetsUserGroups()
	{
		$userGroup = new \TYPO3\CMS\Extbase\Domain\Model\FrontendUserGroup();
		$objectStorageHoldingExactlyOneUserGroups = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneUserGroups->attach($userGroup);
		$this->subject->setUserGroups($objectStorageHoldingExactlyOneUserGroups);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneUserGroups,
			'userGroups',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addUserGroupToObjectStorageHoldingUserGroups()
	{
		$userGroup = new \TYPO3\CMS\Extbase\Domain\Model\FrontendUserGroup();
		$userGroupsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$userGroupsObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($userGroup));
		$this->inject($this->subject, 'userGroups', $userGroupsObjectStorageMock);

		$this->subject->addUserGroup($userGroup);
	}

	/**
	 * @test
	 */
	public function removeUserGroupFromObjectStorageHoldingUserGroups()
	{
		$userGroup = new \TYPO3\CMS\Extbase\Domain\Model\FrontendUserGroup();
		$userGroupsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$userGroupsObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($userGroup));
		$this->inject($this->subject, 'userGroups', $userGroupsObjectStorageMock);

		$this->subject->removeUserGroup($userGroup);

	}
}
