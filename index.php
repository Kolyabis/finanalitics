<?php
include "init.php";
define("HEADER_INC_TEMPLATE_PATH","/class/view/header.php");
define("FOOTER_INC_TEMPLATE_PATH", "/class/view/footer.php");
include HEADER_INC_TEMPLATE_PATH;
$front = frontController::getInstance();
$front->route();
//echo $front->getBody();
include FOOTER_INC_TEMPLATE_PATH;