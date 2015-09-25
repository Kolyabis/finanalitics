<?php
include "init.php";
include HEADER_INC_TEMPLATE_PATH;
$front = frontController::getInstance();
$front->render();
include FOOTER_INC_TEMPLATE_PATH;