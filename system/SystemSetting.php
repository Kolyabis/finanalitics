<?php

abstract class systemSetting {
	//Main settings
	const PS = PATH_SEPARATOR;
	const DS = DIRECTORY_SEPARATOR;
	const PATH_SYSTEM = 'system';
	const PATH_LIBRARY = 'library';
	const PATH_COMPONENTS = 'components';
	const PATH_MODULES = 'modules';
	const PATH_CLASS_ROOT = 'class';
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

static function locale(){}
static function getDate(){}
static function getGlobalTemplateArr(){}
}



