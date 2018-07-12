<?php 
class HomepayFailureModuleFrontController extends ModuleFrontController {
	
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
		
		$this->setTemplate('failure.tpl');
		
		// 		$this->context->smarty->assign(array(
		
		// 		));
	}
}