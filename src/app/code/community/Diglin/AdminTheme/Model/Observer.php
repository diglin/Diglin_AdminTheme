<?php
/**
 * Diglin
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category    Diglin
 * @package     Diglin_AdminTheme
 * @copyright   Copyright (c) 2011-2014 Diglin (http://www.diglin.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Diglin_Admintheme_Model_Observer
{
    /**
     * Event
     * - adminhtml_controller_action_predispatch_start
     */
    public function overrideTheme()
    {
        Mage::getDesign()->setArea('adminhtml')
            ->setTheme((string)Mage::getStoreConfig('design/admin/theme'));
    }
}
