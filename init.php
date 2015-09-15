<?php
include 'system/SystemSetting.php';
// TODO: подключить Develeper для вывода системных ошибо
set_include_path(get_include_path()
		.PATH_SEPARATOR.'components/com_menu'
		.PATH_SEPARATOR.'library'
		.PATH_SEPARATOR.'system'
		.PATH_SEPARATOR.'class/controller'
        .PATH_SEPARATOR.'class/model'
        .PATH_SEPARATOR.'class/view');

function autoloadSystem( $class_name ) {
	$file = SystemSetting::PATH_SYSTEM.SystemSetting::PATH_SEPORATOR.$class_name.SystemSetting::EXT_FILE_PHP;
	if ( !file_exists( $file ) ) {
			return false;
	} else {
			require_once( $file );
	}
}
spl_autoload_register('autoloadSystem');

function autoloadClassController( $class_name ) {
	$file = __DIR__.SystemSetting::PATH_SEPORATOR.SystemSetting::PATH_CLASS.SystemSetting::PATH_SEPORATOR.SystemSetting::PATH_CONTROLLER.SystemSetting::PATH_SEPORATOR.$class_name.SystemSetting::EXT_FILE_PHP;
	if(!file_exists($file)){
			return false;
	}else{
			require_once( $file );
	}
}
spl_autoload_register('autoloadClassController');

function autoloadClassModel( $class_name ) {
	$file = __DIR__.SystemSetting::PATH_SEPORATOR.SystemSetting::PATH_CLASS.SystemSetting::PATH_SEPORATOR.SystemSetting::PATH_MODEL.SystemSetting::PATH_SEPORATOR.$class_name.SystemSetting::EXT_FILE_PHP;
	if(!file_exists($file)){
			return false;
	}else{
			require_once( $file );
	}
}
spl_autoload_register('autoloadClassModel');

function autoloadClassView( $class_name ) {
	$file = __DIR__.SystemSetting::PATH_SEPORATOR.SystemSetting::PATH_CLASS.SystemSetting::PATH_SEPORATOR.SystemSetting::PATH_VIEW.SystemSetting::PATH_SEPORATOR.$class_name.SystemSetting::EXT_FILE_PHP;
	if(!file_exists($file)){
			return false;
	}else{
		require_once( $file );
	}
}
spl_autoload_register('autoloadClassView');

function autoloadLibrary( $class_name ) {
    $file = SystemSetting::PATH_LIBRARY.SystemSetting::PATH_SEPORATOR.$class_name.SystemSetting::EXT_FILE_PHP;
 //echo $file;
    if ( !file_exists( $file ) ) {
        return false;
    } else {
        require_once( $file );
    }
}
spl_autoload_register('autoloadLibrary');

function autoloadComponent( $class_name ) {
    $file = SystemSetting::PATH_COMPONENTS.SystemSetting::PATH_SEPORATOR.'com_menu'.SystemSetting::PATH_SEPORATOR.$class_name.SystemSetting::EXT_FILE_PHP;
  echo $file;
	if ( !file_exists( $file ) ) {
        return false;
    } else {
        require_once( $file );
    }
}
spl_autoload_register('autoloadComponent');