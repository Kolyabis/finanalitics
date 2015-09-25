<?php
class indexController implements iController{
    private $_fc;
    private $_getLanguage;
    private $_viewObject;
    private $_modelObject;
    private $_options;
    private $_params;
    private $_POST;
    private $_GET;
    public $_mailObj;

    public function __construct(){
        $this->_fc = frontController::getInstance();
        $this->_options = $this->_fc->getParams();
        $this->_viewObject = new indexView();
        //TODO: получил значение getLanguage с FrontController-а, отдал конструктору модели для сортировки
        $this->_getLanguage = $this->_fc->getLanguage();
        if(isset($_POST) && !empty($_POST)){
            $this->_POST = $_POST;
        }else{
            $this->_POST = null;
        }
	    $this->_modelObject = new indexModel($this->_getLanguage, $this->_options);
    }

    public function indexAction(){
        $this->_params['lang'] = $this->_modelObject->returnLangParams();
        $this->_params['mainmenu'] = $this->_modelObject->returnModelParams();
        $this->_params['default_lang'] = $this->_getLanguage;
        $this->_params['body'] = $this->_modelObject->getModelBody();
        $this->_viewObject->GeneretedviewsTpl('default/default.php',$this->_params);
        //TODO: Может потом подключить, чтоб отрисовывать через него $this->_fc->setBody($result);
    }

    public function mailAction(){
        if($this->_POST != null){
            $this->_mailObj = new mod_feedback($this->_POST);
        }
    }
}