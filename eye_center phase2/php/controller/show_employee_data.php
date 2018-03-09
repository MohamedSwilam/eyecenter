<?php
require_once '../model/user.php';

$u1 = new user();

$userID = $_POST['userID'];
$userData = $u1->read_all_user_info($userID);
if (!empty($userData)) {
    $i = 0;
    foreach ($userData as $value) {
        echo $value['type_id'] . "~" . $value['name'] . "~" . $value['email'] . "~" . $value['telephone'] . "~" . $value['bithdate'] . "~" . $value['ismale'] . "~" . $value['value'] . "~" . $value['user_id'];
    }
}
?>
