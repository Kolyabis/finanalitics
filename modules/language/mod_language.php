<?php
/**
 * Created by PhpStorm.
 * User: O.Zabiyaka
 * Date: 18.09.15
 * Time: 9:02
 */
class mod_language extends LanguageSystemSetting {
    private $_getLanguag;
    public  $langArr = array();
    public function __construct(){
        $this->_getLanguag = frontController::getInstance();
    }
    public function langSwitch(){
       $cnt = count($this->arrLanguage);
        for($i=1; $i <= $cnt; $i++){
            if($this->_getLanguag->getLanguage() == $this->arrLanguage[$i]){
                $this->langArr[] .= "<button type='button' id='lang' class='btn btn-link btn-sm' style='color:red;' onclick='switchLang(\"".$this->arrLanguage[$i]."\")'>".strtoupper($this->arrLanguage[$i])."</button>";
            }else{
                $this->langArr[] .= "<button type='button' id='lang' class='btn btn-link btn-sm' onclick='switchLang(\"".$this->arrLanguage[$i]."\")'>".strtoupper($this->arrLanguage[$i])."</button>";
            }
        }
        return $this->langArr;
    }
} 