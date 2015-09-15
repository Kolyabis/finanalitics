<?php
class indexModel{
    protected $_post;
    protected $_params;
    protected $_objView;
    private  $_dbQuery;
    public $_comMenu;
    public function __construct($_post = null, $_params = null){
        //TODO: подумать как подключать вспомогательные классы
        //$this->_dbQuery = new DbQuery();
        //$this->_comMenu = new ComMenu();
        $this->_post = $_post;
        $this->_params = $_params;
        // TODO: работа с GET ARRAY POST
	    $this->render();
    }
/* Возвращает полный результат HTML для вывода на экран */
	  public function render() {
          //$this->_params['mainmenu'] = $this->_comMenu->get_list($this->_dbQuery->select(array("id","page"), 'mainmenu', array(), array(), 1));
          $this->_objView = new indexView($this->_post, $this->_params);
		  $this->_objView->GeneretedviewsTpl();

	  }
}