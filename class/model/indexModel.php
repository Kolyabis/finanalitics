<?php
class indexModel{
    protected $_post;
    protected $_objView;
    public function __construct($_post = null){
        $this->_post = $_post;
        // TODO: работа с GET ARRAY POST
	      $this->render();
    }
/* Возвращает полный результат HTML для вывода на экран */
	  public function render() {
		    $this->_objView = new indexView($this->_post);
		    $this->_objView->GeneretedviewsTpl();
	  }
}