<?php
class indexModel{
    protected $_fr;
    protected $_objView;
	  protected $_dbQuery;
	  protected $_params;
	  protected $_lang;
    protected $_getMenu;
    protected $_getSession;
    protected $_modLanguage;

    public function __construct($language){
        //TODO: описать механизм СЕССИИ
        $this->_getSession = new SessionSystemSetting();
        $this->_dbQuery = new DbQuery();
        $this->_getMenu = new ComMenu();
        $this->_params = $this->_getMenu->getMenu($this->_dbQuery->select(array("id","page","parent_id","controller","language"), 'mainmenu', array("language"), array("$language"), 2));
        $this->_modLanguage = new mod_language();
        $this->_lang = $this->_modLanguage->langSwitch();
    }
    public function returnModelParams(){
        return $this->_params;
    }
    public function returnLangParams(){
        return $this->_lang;
    }
}