<?php
//TODO: САША ОТНЕСИСЬ К ЭТОМУ АБСТРАКТНО - сдесь не показана как надо и что нада! я тебе даю "наброски" того что мы сделали!!!накидываю специально без того всего что у нас сейчакс работает(НЕ СМОТРИ ТУДА, ГРУБО-ГОВОРЯ ЗАБУДЬ!) и начинай описывать все тут(не зацикливайся не реализиции)не можешь получить даные и вывести ставить просто пустой метод и коменты типо получил массив и отправил на рендер и создаешь статический жесткий массив для примера и посылаешь его как будто ты его отпарсил принял итд! И САМОЕ ГЛАВНОЕ ТЕБЕ ВРЕМЯ пару часов! потом я сажус за твой код, тоже на пару  !
class indexController implements iController {

    private $_controllerNameString;
    private $_viewNameString;
    private $_modelNameString;

    private $_controllerObject;
    private $_viewObject;
    private $_modelObject;

    private $_params;
    private $_POST;
    private $_GET;
    private $_poolObject;
    private $_someArrayData;

    private $_mainIncludePathTpl;
    private $_mainIncludeTpl;


    public function __construct() {
    }

    public function indexAction() {
    }

    public function chkLogonUserAction() {
    }

    public function chkIdSessionUserAction() {
    }

    public function getMenuAction() {
    }

    public function __tostring() {
        return '';
    }

    public function __call() {
    }

    public function __get() {
    }

    public function __set() {
    }
}

class indexModel {
    public function __construct() {
    }

    public function getMenu() {
    }

    public function render() {
    }
}

class chkAccesSelectModel {
    public function __construct() {
    }

    public function getuserid() {
    }

    public function chkuser() {
    }
}

class UserModel {
    public function __construct() {
    }

    public function adduser() {
    }

    public function edituser() {
    }

    public function removeuser() {
    }

    public function newuser() {
    }

    public function tooglepreority() {
    }

}

class indexView {

    public function __construct() {
    }

    public function GeneretedviewsTpl() {
    }

    /*** @param $header */
    public function getHeaderTpl($header, $params = null) {
        include (__DIR__ . '/' . $header);
    }

    /*** @param $body */
    public function getBodyTpl($body, $params = null) {
        include (__DIR__ . '/' . $body);
    }

    /*** @param $footer */
    public function getFooterTpl($footer, $params = null) {
        include (__DIR__ . '/' . $footer);
    }
}

?>


общий шаблон (tpl_main.php ):
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>My site. <?= $pagetitle ?></title>
</head>
<body>
<div id="page">
    <? include $tpl ?>
</div>
</body>
</html>


в нужном месте в него включается шaблон нашей страницы (tpl_links.php):
<h2><?= $pagetitle ?></h2>
<ul>
    <? foreach ($DATA as $row): ?>
        <li><a href="<?= $row['link'] ?>" target="_blank"><?= $row['name'] ?></a></li>
    <? endforeach ?>
    <ul>