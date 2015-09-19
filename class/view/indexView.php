<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12.09.2015
 * Time: 13:54
 */
class indexView {
	protected $_dataViews;
	protected $_dataParams;
	public function __construct($resultPost, $resultParams =  null){
        $this->_dataViews = $resultPost;
		    $this->_dataParams = $resultParams;
  }

    public function view_menu($arr, $parent_id = 0){
        if(empty($arr[$parent_id])){
            return;
        }
        echo "<ul class='nav navbar-nav'>";
        for($i = 0; $i < count($arr[$parent_id]) ;$i++){
            //print_r($arr[$i]['parent_id']);
            if($arr[$parent_id][$i]['parent_id'] == 0){
                echo "<li class='dropdown' id='ddmenu-".$parent_id."' ><a class='dropdown-toggle' data-toggle='dropdown' href='/".$arr[$parent_id][$i]['controller']."'>".$arr[$parent_id][$i]['page']."<b class='caret'></b></a>";
                echo "<ul class='dropdown-menu'>";
                $this->view_menu($arr, $arr[$parent_id][$i]['id']);
                echo "</ul>\n";
                echo "</li>\n";
            }else{
                echo "<li  id='ddmenu-".$parent_id."' ><a href='/".$arr[$parent_id][$i]['controller']."'>".$arr[$parent_id][$i]['page']."<b class='caret'></b></a>";
                echo "<ul class='dropdown-menu'>";
                $this->view_menu($arr, $arr[$parent_id][$i]['id']);
                echo "</ul>\n";
                echo "</li>\n";
            }
        }
        echo "</ul>\n";
    }


    public function GeneretedviewsTpl(){
	      $this->getHeaderTpl('default/header.php', $this->_dataViews, $this->_dataParams);
		    $this->getBodyTpl('default/default.php', $this->_dataViews, $this->_dataParams);
		    $this->getFooterTpl('default/footer.php', $this->_dataViews, $this->_dataParams);
	  }

	/*** @param $header */
	public function getHeaderTpl($header , $post = null, $params = null) {
		 include(__DIR__ . '/' . $header);
	}
	/*** @param $body */
	public function getBodyTpl($body , $post = null, $params = null) {
		 include(__DIR__ . '/' . $body);
	}
	/*** @param $footer */
	public function getFooterTpl($footer , $post = null, $params = null) {
		 include (__DIR__ . '/' . $footer);
	}
}