<?php 
class HomepaySuccessModuleFrontController extends ModuleFrontController {
	
	public function __construct() {
		parent::__construct();
		$this->display_column_left = false;
	}
	
	public function postProcess() {
		$this->homepay = new Homepay();
	}
	
	/**
	 * @return array
	 * @see ModuleFrontController::initContent()
	 */
	public function initContent() {
		
		parent::initContent();
		
		$this->setTemplate('success.tpl');
		
// 		$this->context->smarty->assign(array(
				
// 		));
	}
}
