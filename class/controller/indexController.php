<?php
class indexController implements iController{
    private $_fc;
    private $_model;
    private $_post;
    public $_debug;
    public function __construct(){
        $this->_debug = new DebugSystem();
        $this->_fc = frontController::getInstance();
		    //TODO: не забыть удалить после окончания теста
	      $this->_post = array('Post_indexController', 'Post_indexAction');
    }
    /* ************************************************* Default Action ***********************************************/
    public function indexAction(){
	    $this->_model = new indexModel($this->_post);
	    $this->_debug->debug($this->_model);
	    //$this->_debug->PhpSetting();
      //$params = $this->_fc->getParams();
      //$this->_fc->setBody($result);
    }
    /* ****************************************************************************************************************/
}