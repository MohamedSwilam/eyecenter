<?php

include_once 'database.php';
include_once 'crud.php';

class login extends database implements crud {

    //put your code here
    public function create(array $data) {
        
    }

    public function delete(array $data) {
        
    }

    public function read(array $data) {
        //username,password
        $sql = "SELECT `userid` FROM `User_login` WHERE `username`='$data[0]' AND `password`='$data[1]'";
        $result = $this->dataQuery($sql);
        return $result;
    }

    public function update(array $data) {
        
    }

}
