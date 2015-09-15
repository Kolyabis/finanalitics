<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12.09.2015
 * Time: 13:54
 */
class indexView {
	protected $_dataViews;
	protected $_dataParams;
	public function __construct($resultPost, $resultParams){
		$this->_dataViews = $resultPost;
		$this->_dataParams = $resultParams;
}
	public function GeneretedviewsTpl(){
    $this->getHeaderTpl('default/header.php', $this->_dataParams);
		$this->getBodyTpl('default/default.php', $this->_dataParams);
		$this->getFooterTpl('default/footer.php', $this->_dataParams);
	}
//	public function setBody(){
//		return $this->_dataViews;
//	}
	/*** @param $header */
	public function getHeaderTpl($header ,$params = null) {
		 include(__DIR__ . '/' . $header);
	}
	/*** @param $body */
	public function getBodyTpl($body ,$params = null) {
		 include(__DIR__ . '/' . $body);
	}
	/*** @param $footer */
	public function getFooterTpl($footer ,$params = null) {
		 include (__DIR__ . '/' . $footer);
	}
}