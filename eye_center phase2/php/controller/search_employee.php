<?php

include_once '../model/user.php';

$u1 = new user();
$value = $_POST['value'];
$searchBy = $_POST['searchBy'];

$result = $u1->search($searchBy, $value);

if (!empty($result)) {
    $i = 0;
    foreach ($result as $value) {
        if ($i == count($result) - 1) {
            echo $value['id'] . "~" . $value['name'] . "~" . $value['type'] . "~" . $value['email'] . "~" . $value['telephone'];
        } else {
            echo $value['id'] . "~" . $value['name'] . "~" . $value['type'] . "~" . $value['email'] . "~" . $value['telephone'] . "!^@";
            $i++;
        }
    }
}