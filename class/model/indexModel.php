<?php
class indexModel extends defaultModel{
    protected  $_params;
    protected  $_lang;
    protected $_getBody;
    protected $_body;
    protected $_db;

    public function __construct($language, $option){
        parent::__construct($language, $option);
        $this->setModelBody($language);
    }
    protected function setModelBody($language){
        $this->_db = DataBaseSetting::getInstance('mysql');
        $sql = "SELECT c.* FROM category c, mainmenu m WHERE c.language = '$language' and m.language = '$language' and m.id_cat = c.id and c.status != 1";
        $result = $this->_db->query($sql);
        $this->_body = $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getModelBody(){
        return $this->_body;
    }
}