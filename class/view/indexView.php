<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12.09.2015
 * Time: 13:54
 */
class indexView {
	protected $_dataViews;
	public function __construct($resultPost){
		$this->_dataViews = $resultPost;
		//print_r($this->_dataViews);
}
	public function GeneretedviewsTpl(){
		$this->getHeaderTpl('default/header.php');
		$this->getBodyTpl('default/default.php');
		$this->getFooterTpl('default/footer.php');
	}
//	public function setBody(){
//		return $this->_dataViews;
//	}
	/*** @param $header */
	public function getHeaderTpl($header) {
		 include(__DIR__ . '/' . $header);
	}
	/*** @param $body */
	public function getBodyTpl($body) {
		 include(__DIR__ . '/' . $body);
	}
	/*** @param $footer */
	public function getFooterTpl($footer) {
		 include (__DIR__ . '/' . $footer);
	}
}