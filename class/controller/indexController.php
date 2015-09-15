<?php
class indexController implements iController{
    private $_fc;
    private $_model;
    private $_post;
    private $_params;
    public function __construct(){
        //TODO: удалить класс отладчик после завершения отладки сайта
        $this->_fc = frontController::getInstance();
        $this->_params = $this->_fc->getParams();
        //TODO: не забыть удалить после окончания теста, подумать как ганять\ghjdthznm ПОСТ данные
        $this->_post = $_POST;
    }
    /* ************************************************* Default Action ***********************************************/
    public function indexAction(){
        $this->_model = new indexModel($this->_post, $this->_params);
    }
    /* ****************************************************************************************************************/
}