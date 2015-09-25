<?php
class frontController implements iController {
    const DEFAULT_CONTROLLER = "indexController";
    const DEFAULT_ACTION = "indexAction";
    const DEFAULT_LANGUAGE = "ru";

    protected $_language;
    protected $_controllerString = self::DEFAULT_CONTROLLER;
    protected $_actionString = self::DEFAULT_ACTION;
    protected $_controllerObject = null;
    protected  $_params = array();
    private $_uri;

    protected $_options = array();
    protected $_defaultPath = array(
      "system" => "system/",
      "class" => "class/",
      "modules" => "modules/",
      "css_default" => "css/",
      "css" => "css/",
      "js" => "css/js/lib",
    );

    static $_instance;

    public static function getInstance() {
        if (!(self::$_instance instanceof self))
            self::$_instance = new self();
        return self::$_instance;
    }

    protected function __construct() {
        $this->parseUri();
        $this->setLanguage();
        $this->setControllerString();
        $this->setActionString();
        $this->setParamsArray();
    }
    public function render(){
        if (class_exists ($this->_controllerString)) {
            $rc = new ReflectionClass($this->_controllerString);
            if ($rc->implementsInterface ('iController')) {
                $this->setControllerObject($rc);
            } else {
                throw new InvalidArgumentException("The Interface has not been defined.");
            }
            if ($rc->hasMethod($this->_actionString)) {
                $this->setActionObject ($rc);
            } else {
                throw new InvalidArgumentException("The Action '$this->_actionString' has not been defined.");
            }
        } else {
            throw new InvalidArgumentException("The Controller '$this->_controllerString' has not been defined.");
        }
    }
    protected function parseUri() {
        $request = $this->getUri();
        $this->_uri = explode ('/', $request);
    }
    //TODO: врубаю код тапором, чтоб заработало, потом поменяем
    public function setLanguage(){
        if(!empty($this->_uri[0]) && $this->_uri[0] == 'ru' || $this->_uri[0] == 'en' || $this->_uri[0] == 'ua'){
            return $this->_language = $this->_uri[0];
        }else{
            return $this->_language = self::DEFAULT_LANGUAGE;
        }
    }

    protected function setControllerString() {
        if (!empty($this->_uri[1])) {
            $this->_controllerString = ucfirst (strtolower ($this->_uri[1])) . "Controller";
        } else {
            $this->_controllerString = "indexController";
        }
    }

    protected function setActionString() {
        if (!empty($this->_uri[2])) {
            $this->_actionString = ucfirst (strtolower ($this->_uri[2])) . "Action";
        } else {
            $this->_actionString = "indexAction";
        }

    }

    protected function setControllerObject($rc) {
        $this->_controllerObject = $rc->newInstance ();
    }

    protected function setActionObject($rc) {
        $method = $rc->getMethod($this->_actionString);
        $method->invoke ($this->_controllerObject);
    }

    protected function setParamsArray() {
        if (!empty($this->_uri[3])) {
            $keys = array();
            $values = array();
            for ($i = 3, $cnt = count ($this->_uri); $i < $cnt; $i++) {
                if ($i % 2 == 0)
                    $keys[] = $this->_uri[$i];
                else
                    $values[] = $this->_uri[$i];
            }
            $this->_params = array_combine ($keys, $values);
        }
    }

    public function getLanguage(){
        return $this->_language;
    }
    public function getParams() {
        return $this->_params;
    }

    protected function getUri() {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim ('/'.$_SERVER['REQUEST_URI'], '/');
        }
    }

    public function getController() {
       return ($this->_controllerObject);
    }
    /*function getBody(){
        return $this->_body;
    }
    function setBody($body){
        $this->_body = $body;
    }*/
}