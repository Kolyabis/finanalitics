<?php
/**
 * Created by PhpStorm.
 * User: O.Zabiyaka
 * Date: 15.09.15
 * Time: 15:39
 */
class DbQuery extends checkData {
    protected $_table; /* Наименование одной или нескольких имен таблиц ( писать через ( , ) ) */
    protected $_arrParams; /* Переменные критериев */
    protected $_arrFilds; /* Перечень нужных полей */
    protected $_arrSelf; /* Поля критериев */
    protected $_arrWhere;
    protected $_Ref;
    private $_db;
    public function __construct(){
        $this->_db = DataBaseSetting::getInstance('mysql');
    }
    /******************************* Метод SELECT ***************************************/
    public function select(array $filds = null, $table = null ,array $self = null ,array $parametrs = null, $tpl = 1){
        $this->checkDataFild($filds);
        $this->checkDataTable($table);
        $this->checkDataSelf($self);
        $this->checkParametrs($parametrs);
        switch($tpl){
            case 1 :
                $sql = "SELECT ";
                foreach($this->_arrFilds as $key => $value){
                    $sql .= $value .",";
                }
                $sql = substr("$sql", 0, -1);
                $sql .= " FROM $this->_table ";
                $result = $this->_db->query($sql);
                $result = $result->fetchAll(PDO::FETCH_ASSOC);
                return $result;
                break;
            case 2 :
                $sql = "SELECT ";
                foreach($this->_arrFilds as $key => $value){
                    $sql .= $value .",";
                }
                $sql = substr("$sql", 0, -1);
                $sql .= " FROM $this->_table ";
                $sql .= "WHERE ";
                $combine = array_combine($this->_arrSelf, $this->_arrParams);
                foreach($combine as $key => $value){
                    $sql .= "$key"." = "."'$value'"." and ";
                }
                $sql = substr("$sql", 0, -5);
                $result = $this->_db->query($sql);
                return $result->fetchAll(PDO::FETCH_ASSOC);
                break;
            case 3 : echo "";
                break;
            case 4 : echo "";
                break;
        }
    }
    /*********************************************************************************** */
} 