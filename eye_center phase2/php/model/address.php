<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of address
 *
 * @author Hossam
 */

include_once 'database.php';
include_once 'crud.php';
class address extends database implements crud{
    public function create(array $data) {
        
    }

    public function delete(array $data) {
        
    }

    public function read(array $data) {
        $sql="SELECT id, address, parent FROM address WHERE 1";
        $result = $this->dataQuery($sql);
        return $result;
    }

    public function update(array $data) {
        
    }

    public function getallcountry() {
        $sql="SELECT * FROM address WHERE `parent`='0'";
        $result = $this->dataQuery($sql);
        return $result;
    }
     public function getCityOfCountry($countryid) {
        $sql="SELECT * FROM address WHERE `parent`='$countryid'";
        $result = $this->dataQuery($sql);
        return $result;
    }
//put your code here
}