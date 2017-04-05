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
 * OrderController
 */
class OrderController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
  /**
   * orderRepository
   *
   * @var \ZECHENDORF\Bazaar\Domain\Repository\OrderRepository
   * @inject
   */
  protected $orderRepository = NULL;
  
  /**
   * action list
   *
   * @return void
   */
  public function listAction()
  {
    if($this->settings['admin_usergroup'] && $GLOBALS['TSFE']->fe_user->groupData['uid'][$this->settings['admin_usergroup']]){
      // user is in admin group: show all orders
      $orders = $this->orderRepository->findAll();
    } else {
      // user is not in admin group: show own orders
      
    }
    
    $this->view->assign('settings',$this->settings);
    $this->view->assign('orders', $orders);
  }

  /**
   * action show
   *
   * @param \ZECHENDORF\Bazaar\Domain\Model\Order $order
   * @return void
   */
  public function showAction(\ZECHENDORF\Bazaar\Domain\Model\Order $order)
  {
    $this->view->assign('order', $order);
  }
}
