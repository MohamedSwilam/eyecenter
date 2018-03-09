<?php
include_once 'database.php';
include_once 'crud.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of html
 *
 * @author mohamedswilam
 */
class html extends database implements crud{
    //put your code here
    public function create(array $data) {
        
    }

    public function delete(array $data) {
        
    }

    public function read(array $data) {
        //userID
        $sql="SELECT `page_id` FROM `user_type_page` WHERE `user_type_id`='$data[0]'";
        $result = $this->dataQuery($sql);
        if (!empty($result)){
            $menu = array();
            foreach ($result as $value){
                $pageID=$value['page_id'];
                $sqlPage="SELECT `name`, `class_name` FROM `pages` WHERE `id`='$pageID' UNION SELECT `name`, `class_name` FROM `pages` WHERE `parent`='$pageID'";
                $items=  $this->dataQuery($sqlPage);
                if(!empty($items)){
                    $list = array();
                    foreach ($items as $value2) {
                        array_push($list, $value2['name']);
                        array_push($list, $value2['class_name']);
                    }
                }
                array_push($menu, $list);
                unset($list);
            }
            return $menu;
        }else{
            return FALSE;
        }
        
    }

    public function update(array $data) {
        
    }
    
    public function read_page($pageClassName) {
        $sql="SELECT `html` FROM `html` WHERE `page_id`= (SELECT `id` FROM `pages` WHERE `class_name`='$pageClassName')";
        $result = $this->dataQuery($sql);
        return $result;
    }


}
