<?php
/**
 * Created by PhpStorm.
 * User: O.Zabiyaka
 * Date: 15.09.15
 * Time: 15:30
 */
abstract class checkData {
    /******************************* Метод проверки имени таблицы ********************************/
    protected function checkDataTable($table = null){
        if (is_null($table)) {
            $this->_table = 'user';
        } elseif (is_array($table)) {
            $this->_table = $table;
        } else {
            $this->_table = $table;
        }
    }
    /*********************************************************************************************/
    /************************* Метод проверки ПАРАМЕТРОВ Переменные критериев*********************/
    protected function checkParametrs(array $parametrs = null){
        if (is_array($parametrs)) {
            $this->_arrParams = $parametrs;
        }
    }
    /*********************************************************************************************/
    /***************** Метод проверки Перечень нужных критериев поиска WHERE *********************/
    protected function checkDataSelf(array $self){
        if (is_array($self)) {
            $this->_arrSelf = $self;
        }
    }
    /*********************************************************************************************/
    /****************** Метод проверки на массив нужных полей в выборке данных *******************/
    protected function checkDataFild(array $filds){
        if (is_array($filds)) {
            $this->_arrFilds = $filds;
        }
    }
    /*********************************************************************************************/
    protected function checkDataWhereAtr(array $whereAtribut){
        if (is_array($whereAtribut)) {
            $this->_arrWhere = $whereAtribut;
        }
    }
} 