<?php
include_once '../model/user.php';

$u1 = new user();
$userID = $_POST['userID'];
$data = array($userID);
$result = $u1->delete($data);

echo $result;
?>
