<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once'../model/address.php';

$add = new address();


if ($_POST['falg'] == 1) {

    $result = $add->getallcountry();

    if (!empty($result)) {
        $i = 0;
        foreach ($result as $value) {
            if ($i == count($result) - 1) {
                echo $value['id'] . "~" . $value['address'];
            } else {
                echo $value['id'] . "~" . $value['address'] . "~";
                $i++;
            }
        }
    }
}

if ($_POST['falg'] == 2) {
    $result = $add->getCityOfCountry($_POST['country']);

    if (!empty($result)) {
        $i = 0;
        foreach ($result as $value) {
            if ($i == count($result) - 1) {
                echo $value['id'] . "~" . $value['address'];
            } else {
                echo $value['id'] . "~" . $value['address'] . "~";
                $i++;
            }
        }
    } 
    else {
       echo $_POST['country']. "~" . '---------';
    }
}
?>