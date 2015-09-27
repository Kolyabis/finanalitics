<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12.09.2015
 * Time: 13:54
 */
class indexView {

	public function GeneretedviewsTpl($path, $params) {


		$this->getHeaderTpl('default/header.php', $params);
//		TODO switch lang po uri
		if ($path) {
			$this->getBodyTpl($path, $params);
		}


		$this->getFooterTpl('default/footer.php', $params);
	}

	/*** @param $header */
	public function getHeaderTpl($header, $params = null) {
		include(__DIR__ . '/' . $header);
	}

	/*** @param $body */
	public function getBodyTpl($body, $params = null) {
		include(__DIR__ . '/' . $body);
	}

	/*** @param $footer */
	public function getFooterTpl($footer, $params = null) {
		include(__DIR__ . '/' . $footer);
	}
}