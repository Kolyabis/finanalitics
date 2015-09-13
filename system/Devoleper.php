<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12.09.2015
 * Time: 12:08
 */
class Devoleper {
	private $_levelError = array("init_set"=>array(
																								"all"=>1,
																								"nothing"=>0
																								),
												"error_reporting"=>array(
																								"all"=>1,
																								"nothing"=>0
																								)
															);
	/**
	 * @return string
	 */
	public static function DevViewSetting() {
		return "class - " . __CLASS__ . "<br>" .
		"method - " . __METHOD__ . "<br>" .
		"file - " . __FILE__ . "<br>" .
		"dir - " . __DIR__ . "<br>";
	}

	/**
	 * @return mixed
	 */
	public function getLevelError() {
		return $this->_levelError['init_set'];
	}

	/**
	 * @param mixed $levelError
	 */
	public function setLevelError($levelError) {
		return null;
	}
}