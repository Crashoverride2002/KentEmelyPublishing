<?php
if( !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );

/**
*
* @version
* @package VirtueMart
* @subpackage Report
* @copyright Copyright (C) VirtueMart Team - All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.org
*/

/**
 * Report Controller
 *
 * @package	VirtueMart
 * @subpackage Report
 * @author Wicksj
 */
class VirtuemartControllerReport extends VmController {

	/**
	 * Report Controller Constructor
	 */
	function __constuct(){
		parent::__construct();
	}
	
	function updateOrderItems(){

		vRequest::vmCheckToken();

		$model = VmModel::getModel('report');
		$model->updateOrderItems();
		vmInfo('Order Items updated');
		$this->setRedirect($this->redirectPath);
	}

}
// pure php no closing tag