<?php

require_once '../model/user.php';
$u1 = new user();
$type = $_POST['type'];
$userid = $_POST['userid'];
$name = $_POST['name'];
$mail = $_POST['mail'];
$mobile = $_POST['mobile'];
$address_id = $_POST['addressid'];
$DOB = $_POST['DOB'];
$gender = $_POST['gender'];
$password = $_POST['password'];
$salary = $_POST['salary'];
$data = array($type, $name, $mail, $address_id, $mobile, $DOB, $gender, $salary, $password, $userid);
for ($i = 0; $i < count($data); $i++) {
    echo $data[$i] . "//";
}
$result = $u1->update($data);
echo $result;
?>