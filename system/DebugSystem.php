<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 13.09.2015
 * Time: 22:11
 */
class DebugSystem {
		/* ****************************** VIEW print_r() in html teg ( <pre> ) ************************/
		public function debug($obj = null){
				echo '<pre>';
					print_r($obj);
				echo '</pre>';
		}
		/* ****************************** VIEW var_dump() in html teg ( <pre> ) ************************/
		public function debugVarDump($obj = null){
				echo '<pre>';
					var_dump($obj);
				echo '</pre>';
		}
		/* ****************************** View phpinfo information *************************************/
		public function PhpSetting($int = 0){
			if($int == 0){
				phpinfo();
			}else{
				return false;
			}
		}
		/* *********************************************************************************************/
}