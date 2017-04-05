<?php
namespace ZECHENDORF\Bazaar\Controller;


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
 * AddressController
 */
class AddressController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $addresses = $this->addressRepository->findAll();
        $this->view->assign('addresses', $addresses);
    }
    
    /**
     * action show
     *
     * @param \ZECHENDORF\Bazaar\Domain\Model\Address $address
     * @return void
     */
    public function showAction(\ZECHENDORF\Bazaar\Domain\Model\Address $address)
    {
        $this->view->assign('address', $address);
    }
    
    /**
     * action new
     *
     * @return void
     */
    public function newAction()
    {
        
    }
    
    /**
     * action create
     *
     * @param \ZECHENDORF\Bazaar\Domain\Model\Address $newAddress
     * @return void
     */
    public function createAction(\ZECHENDORF\Bazaar\Domain\Model\Address $newAddress)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->addressRepository->add($newAddress);
        $this->redirect('list');
    }
    
    /**
     * action edit
     *
     * @param \ZECHENDORF\Bazaar\Domain\Model\Address $address
     * @ignorevalidation $address
     * @return void
     */
    public function editAction(\ZECHENDORF\Bazaar\Domain\Model\Address $address)
    {
        $this->view->assign('address', $address);
    }
    
    /**
     * action update
     *
     * @param \ZECHENDORF\Bazaar\Domain\Model\Address $address
     * @return void
     */
    public function updateAction(\ZECHENDORF\Bazaar\Domain\Model\Address $address)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->addressRepository->update($address);
        $this->redirect('list');
    }
    
    /**
     * action delete
     *
     * @param \ZECHENDORF\Bazaar\Domain\Model\Address $address
     * @return void
     */
    public function deleteAction(\ZECHENDORF\Bazaar\Domain\Model\Address $address)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->addressRepository->remove($address);
        $this->redirect('list');
    }

}