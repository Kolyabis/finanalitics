<?php
/**
 * Created by PhpStorm.
 * User: O.Zabiyaka
 * Date: 22.09.15
 * Time: 8:45
 */

class defaultModel {
    public $_dbQuery;
    protected $_params;
    protected $_lang;
    protected $_getMenu;
    protected $_menu;
    protected $_getSession;
    protected $_modLanguage;

    public function __construct($language, $option){
        //TODO: описать механизм СЕССИИ
        $this->_getSession = new SessionSystemSetting();
        $this->_dbQuery = new DbQuery();
        $this->_getMenu = new ComMenu();
        $this->_menu = $this->_getMenu->getMenu($this->_dbQuery->select(array("id","page","parent_id","controller","language"), 'mainmenu', array("language"), array($language), 2));
        $this->_modLanguage = new mod_language();
        $this->_lang = $this->_modLanguage->langSwitch();
    }
    public function returnModelParams(){
        return $this->_menu;
    }
    public function returnLangParams(){
        return $this->_lang;
    }
} 