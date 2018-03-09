<?php
include_once '../model/login.php';
session_start();

if (isset($_POST['btn-login'])) {
    $l1 = new login();
    
    $username = $_POST['loginUsername'];
    $password = $_POST['loginPassword'];
    $data = array($username,$password);
    $result = $l1->read($data);
    if(!empty($result)){
        foreach ($result as $value) {
            $userID=$value['userid'];
        }
         $_SESSION['user-id'] = $userID;
         header("location:../viewer/profile.php");
    }else{
        // select error message
        header("location:../viewer/login.php");
    }
//    if ($password == "123" && $email == "admin") {
//        $_SESSION['user-id'] = 0;
//    } else if ($password == "123" && $email == "center-doctor") {
//        $_SESSION['user-id'] = 1;
//    } else if ($password == "123" && $email == "private-doctor") {
//        $_SESSION['user-id'] = 2;
//    } else if ($password == "123" && $email == "preoperative-doctor") {
//        $_SESSION['user-id'] = 3;
//    } else if ($password == "123" && $email == "receptionist") {
//        $_SESSION['user-id'] = 4;
//    } else if ($password == "123" && $email == "accountant") {
//        $_SESSION['user-id'] = 5;
//    }
//    if ($_SESSION['user-id'] != -1){
//        header("location:../viewer/profile.php");
//    }
//    else {
//        header("location:../viewer/login.php");
//    }
}