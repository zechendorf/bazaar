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
 * Test case for class \ZECHENDORF\Bazaar\Domain\Model\Product.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Christopher Zechendorf <christopher@zechendorf.com>
 */
class ProductTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \ZECHENDORF\Bazaar\Domain\Model\Product
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \ZECHENDORF\Bazaar\Domain\Model\Product();
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
	public function getPageTitleReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getPageTitle()
		);
	}

	/**
	 * @test
	 */
	public function setPageTitleForStringSetsPageTitle()
	{
		$this->subject->setPageTitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'pageTitle',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSubTitleReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getSubTitle()
		);
	}

	/**
	 * @test
	 */
	public function setSubTitleForStringSetsSubTitle()
	{
		$this->subject->setSubTitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'subTitle',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getProductNumberReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getProductNumber()
		);
	}

	/**
	 * @test
	 */
	public function setProductNumberForStringSetsProductNumber()
	{
		$this->subject->setProductNumber('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'productNumber',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEanReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getEan()
		);
	}

	/**
	 * @test
	 */
	public function setEanForStringSetsEan()
	{
		$this->subject->setEan('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'ean',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getImagesReturnsInitialValueForFileReference()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getImages()
		);
	}

	/**
	 * @test
	 */
	public function setImagesForFileReferenceSetsImages()
	{
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setImages($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'images',
			$this->subject
		);
	}

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
	public function getDescription1ReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getDescription1()
		);
	}

	/**
	 * @test
	 */
	public function setDescription1ForStringSetsDescription1()
	{
		$this->subject->setDescription1('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'description1',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDescription2ReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getDescription2()
		);
	}

	/**
	 * @test
	 */
	public function setDescription2ForStringSetsDescription2()
	{
		$this->subject->setDescription2('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'description2',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDescription3ReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getDescription3()
		);
	}

	/**
	 * @test
	 */
	public function setDescription3ForStringSetsDescription3()
	{
		$this->subject->setDescription3('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'description3',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTaxRateReturnsInitialValueForTaxRate()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getTaxRate()
		);
	}

	/**
	 * @test
	 */
	public function setTaxRateForTaxRateSetsTaxRate()
	{
		$taxRateFixture = new \ZECHENDORF\Bazaar\Domain\Model\TaxRate();
		$this->subject->setTaxRate($taxRateFixture);

		$this->assertAttributeEquals(
			$taxRateFixture,
			'taxRate',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getProductCombinationsReturnsInitialValueForProductCombination()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getProductCombinations()
		);
	}

	/**
	 * @test
	 */
	public function setProductCombinationsForObjectStorageContainingProductCombinationSetsProductCombinations()
	{
		$productCombination = new \ZECHENDORF\Bazaar\Domain\Model\ProductCombination();
		$objectStorageHoldingExactlyOneProductCombinations = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneProductCombinations->attach($productCombination);
		$this->subject->setProductCombinations($objectStorageHoldingExactlyOneProductCombinations);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneProductCombinations,
			'productCombinations',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addProductCombinationToObjectStorageHoldingProductCombinations()
	{
		$productCombination = new \ZECHENDORF\Bazaar\Domain\Model\ProductCombination();
		$productCombinationsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$productCombinationsObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($productCombination));
		$this->inject($this->subject, 'productCombinations', $productCombinationsObjectStorageMock);

		$this->subject->addProductCombination($productCombination);
	}

	/**
	 * @test
	 */
	public function removeProductCombinationFromObjectStorageHoldingProductCombinations()
	{
		$productCombination = new \ZECHENDORF\Bazaar\Domain\Model\ProductCombination();
		$productCombinationsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$productCombinationsObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($productCombination));
		$this->inject($this->subject, 'productCombinations', $productCombinationsObjectStorageMock);

		$this->subject->removeProductCombination($productCombination);

	}

	/**
	 * @test
	 */
	public function getVolumeDiscountsReturnsInitialValueForVolumeDiscount()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getVolumeDiscounts()
		);
	}

	/**
	 * @test
	 */
	public function setVolumeDiscountsForObjectStorageContainingVolumeDiscountSetsVolumeDiscounts()
	{
		$volumeDiscount = new \ZECHENDORF\Bazaar\Domain\Model\VolumeDiscount();
		$objectStorageHoldingExactlyOneVolumeDiscounts = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneVolumeDiscounts->attach($volumeDiscount);
		$this->subject->setVolumeDiscounts($objectStorageHoldingExactlyOneVolumeDiscounts);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneVolumeDiscounts,
			'volumeDiscounts',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addVolumeDiscountToObjectStorageHoldingVolumeDiscounts()
	{
		$volumeDiscount = new \ZECHENDORF\Bazaar\Domain\Model\VolumeDiscount();
		$volumeDiscountsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$volumeDiscountsObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($volumeDiscount));
		$this->inject($this->subject, 'volumeDiscounts', $volumeDiscountsObjectStorageMock);

		$this->subject->addVolumeDiscount($volumeDiscount);
	}

	/**
	 * @test
	 */
	public function removeVolumeDiscountFromObjectStorageHoldingVolumeDiscounts()
	{
		$volumeDiscount = new \ZECHENDORF\Bazaar\Domain\Model\VolumeDiscount();
		$volumeDiscountsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$volumeDiscountsObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($volumeDiscount));
		$this->inject($this->subject, 'volumeDiscounts', $volumeDiscountsObjectStorageMock);

		$this->subject->removeVolumeDiscount($volumeDiscount);

	}
}
