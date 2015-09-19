<?php
// TODO:
define("HEADER_INC_TEMPLATE_PATH","/class/view/header.php");
define("FOOTER_INC_TEMPLATE_PATH", "/class/view/footer.php");
// TODO:разабраться с подлючением
include 'system/systemSetting.php';
// TODO: это слабо-динамический! (но замена той куче кода!) переделать!!!!!
spl_autoload_register(function($className) {
	$dirs = array(
		'System' => SystemSetting::PATH_SYSTEM.SystemSetting::DS,
		'Controller' => SystemSetting::PATH_CLASS_ROOT.SystemSetting::DS.SystemSetting::PATH_CONTROLLER.SystemSetting::DS,
		'Model' => SystemSetting::PATH_CLASS_ROOT.SystemSetting::DS.SystemSetting::PATH_MODEL.SystemSetting::DS,
		'View' => SystemSetting::PATH_CLASS_ROOT.SystemSetting::DS.SystemSetting::PATH_VIEW.SystemSetting::DS,
		'library' => SystemSetting::PATH_LIBRARY.SystemSetting::DS,
		// TODO: нужен многомерній массив
		'components' => SystemSetting::PATH_COMPONENTS.SystemSetting::DS.'com_menu'.SystemSetting::DS,
		'modules' => SystemSetting::PATH_MODULES.SystemSetting::DS.'language'.SystemSetting::DS,
	);
	foreach( $dirs as $mode => $pathRoot ) {
		if (file_exists($pathRoot.$className.SystemSetting::EXT_FILE_PHP)) {
			require_once($pathRoot.$className.SystemSetting::EXT_FILE_PHP);
		}
	}
});