<?php
class indexController implements iController{

    private $_fc;
    private $_getLanguage;
    //private $_controllerNameString;
    //private $_viewNameString;
    //private $_modelNameString;

    //private $_controllerObject;
    private $_viewObject;
    private $_modelObject;

    private $_params;
    private $_POST;
    private $_GET;
    //private $_poolObject;
    //private $_someArrayData;

    //private $_mainIncludePathTpl;
    //private $_mainIncludeTpl;
    public $_mailObj;

    public function __construct(){
        $this->_fc = frontController::getInstance();
        //TODO: получил значение getLanguage отдал конструктору модели для сортировки
        $this->_getLanguage = $this->_fc->getLanguage();
        if(isset($_POST) && !empty($_POST)){
            $this->_POST = $_POST;
        }else{
            $this->_POST = null;
        }
	      $this->_modelObject = new indexModel($this->_getLanguage);
    }
    public function indexAction(){
        $this->_params = $this->_fc->getParams();
        $this->_params['mainmenu'] = $this->_modelObject->returnModelParams();
        $this->_params['lang'] = $this->_modelObject->returnLangParams();
        $this->_viewObject = new indexView(/*$this->_POST,*/ $this->_params);
        $this->_viewObject->GeneretedviewsTpl();
    }
    public function mailsendAction(){
        if($this->_POST != null){
            $this->_mailObj = new mod_feedback($this->_POST);
        }
    }
}