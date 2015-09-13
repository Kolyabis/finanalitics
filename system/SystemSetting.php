<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12.09.2015
 * Time: 12:14
 */
abstract class SystemSetting {
	//Main settings
	const PATH_SEPORATOR = '/';
	const PATH_SYSTEM = 'system';
	const PATH_CLASS = 'class';
	const PATH_CONTROLLER = 'controller';
	const PATH_MODEL = 'model';
	const PATH_VIEW = 'view';
	const EXT_FILE_PHP = '.php';
	const EXT_FILE_TPL = '.tpl';

	//MySql settings
	const DSN_MYSQL = 'mysql:dbname=fin;host=localhost';
	const USER_MYSQL = 'root';
	const PASSWORD_MYSQL = '';
	//MySqli settings
	const DSN_MYSQLI = 'mysqli:dbname=fin;host=localhost';
	const USER_MYSQLI = 'root';
	const PASSWORD_MYSQLI = '';
	//ACCESS
	const GUEST = 0;
	const USER = 1;
	const ADMIN = 2;
	//PRIORITY
	const BLOCK = 3;
	const VIEWS = 4;
	const MODERATOR = 5;

	static function autoloadMain($classNameLoad = null) {
		// TODO: ������� ����� ��������� ����� " �������� �������, DIR_ROOT � �������������� ������� "

		//if (true/*file_exists()*/) {
			//require_once(self::PATH_SEPORATOR . "system" . self::PATH_SEPORATOR . $classNameLoad . self::EXT_FILE_PHP);
			//TODO: ����������� ���������� ������ ����. ��������� �������� ����������� �������, ��� ������ �������� �� ���������
			//require_once(self::PATH_SEPORATOR . "class" . self::PATH_SEPORATOR . "controller" . $classNameLoad . self::EXT_FILE_PHP);
			//require_once(self::PATH_SEPORATOR . "class" . self::PATH_SEPORATOR . "model" . $classNameLoad . self::EXT_FILE_PHP);
			//require_once(self::PATH_SEPORATOR . "class" . self::PATH_SEPORATOR . "view" . $classNameLoad . self::EXT_FILE_PHP);
		//} else {
			//return null;
		//}
	}
	/*static function autoloadRegisterMain() {
		// TODO: ����������� ������� ������������ (class_exxist(), __CLASS__ etc..)
		return spl_autoload_register('autoloadMain');
	}*/

//TODO:
static function locale(){}
static function getDate(){}
static function getGlobalTemplateArr(){}
}



