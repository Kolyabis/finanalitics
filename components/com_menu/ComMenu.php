<?php
/**
 * Created by PhpStorm.
 * User: O.Zabiyaka
 * Date: 15.09.15
 * Time: 16:19
 */
class ComMenu extends library  {
    /****************************** Метод формирования массива для (меню) . Рекурсия *******************/
    public function getMenu(array $list = null){
        $this->checkArray($list);
        $main_list = array();
        $cnt = count($list);
        if($cnt != 0){
            for($i=0; $i < $cnt; $i++){
                $row = $list[$i];
                if(empty($main_list[$row['parent_id']])){
                    $main_list[$row['parent_id']] = array();
                }
                $main_list[$row['parent_id']][] = $list[$i];
            }
        }
        return $main_list;
    }
} 