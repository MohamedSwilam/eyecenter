<?php
require_once '../model/user.php';
require_once '../model/html.php';
$u1 = new user();
$h1 = new html();

session_start();


$userID = $_SESSION['user-id'];
$data = array($userID);
$result = $u1->read($data);
foreach ($result as $value) {   
    $name = $value['name'];
    $type = $value['type'];
    $type_id = $value['type_id'];
}
if ($userID == -1) {
    header("location:../viewer/login.php");
}

$menu = $h1->read($data);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">

        <link rel="stylesheet" href="../../css/designaccount.css">
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="../../css/libraries/bootstrap.min.css">
        <!-- Font Awesome CSS-->
        <link rel="stylesheet" href="../../css/libraries/font-awesome.min.css">
        <!-- Custom Font Icons CSS-->
        <link rel="stylesheet" href="../../css/libraries/font.css">
        <!-- Google fonts - Muli-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
        <!-- theme stylesheet-->
        <!--<link rel="stylesheet" href="../../css/libraries/style.default.css" id="theme-stylesheet">-->
        <!--<link rel="stylesheet" href="../../css/libraries/style.blue.css" id="theme-stylesheet">-->
        <!--<link rel="stylesheet" href="../../css/profile-blue.css">-->
        <!--<link rel="stylesheet" href="../../css/libraries/style.green.css" id="theme-stylesheet">-->
        <!--<link rel="stylesheet" href="../../css/profile-green.css">-->
        <!--<link rel="stylesheet" href="../../css/libraries/style.pink.css" id="theme-stylesheet">-->
        <!--<link rel="stylesheet" href="../../css/profile-pink.css">-->
        <!--<link rel="stylesheet" href="../../css/libraries/style.violet.css" id="theme-stylesheet">-->
        <!--<link rel="stylesheet" href="../../css/profile-violet.css">-->
        <link rel="stylesheet" href="../../css/libraries/style.red.css" id="theme-stylesheet">
        <link rel="stylesheet" href="../../css/profile-red.css">
        <!--<link rel="stylesheet" href="../../css/libraries/style.sea.css" id="theme-stylesheet">-->
        <!--<link rel="stylesheet" href="../../css/profile-sea.css">-->

    </head>
    <body>
        <header class="header">   
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid d-flex align-items-center justify-content-between">
                    <div class="navbar-header"><a href="index.html" class="navbar-brand">
                            <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">NEW</strong><strong>VISION</strong></div>
                            <div class="brand-text brand-sm"><strong class="text-primary">N</strong><strong>V</strong></div></a>
                        <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
                    </div>
                    <ul class="right-menu list-inline no-margin-bottom">    
                        <li class="list-inline-item logout"> 
                            <a id="logout" href="login.php" class="nav-link">Logout <i class="icon-logout"></i></a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="d-flex align-items-stretch">
            <!-- Sidebar Navigation-->
            <nav id="sidebar">
                <!-- Sidebar Header-->
                <div class="sidebar-header d-flex align-items-center">
                    <div class="avatar"><img src="../../images/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
                    <div class="title">
                        <h1 class="h5"><?php echo $name; ?></h1>
                        <p><?php echo $type; ?></p>
                    </div>
                </div>
                <!-- Sidebar Navidation Menus-->
                <ul class="list-unstyled">
                    <?php
                    $pageName="";
                    $pageClassName="";
                    foreach ($menu as $value) {
                        if (count($value) <= 2) {
                            for ($i = 0; $i < count($value); $i++) {
                                if($i==0){
                                    $pageName=$value[$i];
                                }else{
                                    $pageClassName=$value[$i];
                                }
                                
                            }
                        echo "<li id='$pageClassName-li'><a id='$pageClassName' class='link-page'> <i class='icon-home'></i>$pageName</a></li>";
                        }else{
                            $counter=-1;
                            for ($i = 0; $i < count($value); $i++) {
                                if($i==0){
                                    $pageName=$value[$i];
                                }else if($i==1){
                                    $pageClassName=$value[$i];
                                    echo "<li  class='$pageClassName'>
                                            <a href='#".$pageClassName."Dropdown' aria-expanded='false' data-toggle='collapse'> <i class='fa fa-user'></i>$pageName</a>
                                            <ul id='".$pageClassName."Dropdown' class='collapse list-unstyled'>";
                                    $counter=0;
                                }else if($counter==0){
                                    $pageName=$value[$i];
                                    $counter++;
                                }else if($counter==1){
                                    $pageClassName=$value[$i];
                                    $counter=0;
                                    echo "<li id='$pageClassName-li'><a id='$pageClassName' class='link-page'>$pageName</a></li>";
                                    if($i==count($value)-1){
                                        echo "</ul>
                                            </li>";
                                    }
                                }
                            }
                        }
                    }
                    ?>
                    
                </ul>
            </nav>
            <?php
//            if ($userTypeID == 0) {
//                echo '<nav id="sidebar">
//                <!-- Sidebar Header-->
//                <div class="sidebar-header d-flex align-items-center">
//                    <div class="avatar"><img src="../../images/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
//                    <div class="title">
//                        <h1 class="h5">Mohamed Ehab</h1>
//                        <p>Administrator</p>
//                    </div>
//                </div>
//                <!-- Sidebar Navidation Menus-->
//                <ul class="list-unstyled">
//                    <li class="active" id="home-li"><a id="home" class="link-page"> <i class="icon-home"></i>Home </a></li>
//                    <li  class="add-employee-li-father edit-employee-li-father delete-employee-li-father show-employee-li-father">
//                        <a href="#employeeDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-user"></i>Employees</a>
//                        <ul id="employeeDropdown" class="collapse list-unstyled">
//                            <li id="add-employee-li"><a id="add-employee" class="link-page">Add Employee</a></li>
//                            <li id="edit-employee-li"><a id="edit-employee" class="link-page">Edit Employee</a></li>
//                            <li id="delete-employee-li"><a id="delete-employee" class="link-page">Delete Employee</a></li>
//                            <li id="show-employee-li"><a id="show-employee" class="link-page">Show Employee</a></li>
//                        </ul>
//                    </li>
//                    <li class="viewpayments-li-father otherpayments-li-father"><a href="#paymentsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-check"></i>Payments</a>
//                        <ul id="paymentsDropdown" class="collapse list-unstyled ">
//                            <li id="otherpayments-li"><a id="otherpayments" class="link-page">Submit Payment</a></li>
//                            <li id="viewpayments-li"><a id="viewpayments" class="link-page">View Payments</a></li>
//                        </ul>
//                    </li>
//                    <li id="statistics-li"><a id="statistics" class="link-page"> <i class="fa fa-bar-chart"></i>Statistics</a></li>
//                    <!--<li><a class="link-page"> <i class="fa fa-info-circle"></i>Center Information</a></li>-->
//                    <li class="account-settings-li"><a id="account-settings" class="link-page"> <i class="icon-settings"></i>Account Settings </a></li>
//                </ul>
//            </nav>';
//            } else if ($userTypeID == 1) {  
//                echo '<nav id="sidebar">
//                <!-- Sidebar Header-->
//                <div class="sidebar-header d-flex align-items-center">
//                    <div class="avatar"><img src="../../images/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
//                    <div class="title">
//                        <h1 class="h5">Mohamed Ahmed</h1>
//                        <p>Center Doctor</p>
//                    </div>
//                </div>
//                
//                
//                <!-- Sidebar Navidation Menus-->
//                <ul class="list-unstyled">
//                    <li class="active"><a class="link-page"> <i class="icon-home"></i>Home </a></li>
//                    <li id="surgery-li"><a id="surgery" class="link-page"> <i class="fa fa-user-md"></i>Surgeries</a></li>
//                    
//                    <li class="create-report-li-father view-report-li-father"><a href="#medicalreportsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-wpforms"></i>Medical Reports</a>
//                        <ul id="medicalreportsDropdown" class="collapse list-unstyled ">
//                            <li id="create-report-li" ><a id="create-report" class="link-page">Create Medical Report</a></li>
//                            <li id="view-report-li" ><a id="view-report" class="link-page">View Medical Report</a></li>
//                        </ul>
//                    </li>
//                    
//                    <li class="add-medicine-li-father edit-medicine-li-father delete-medicine-li-father view-medicine-li-father"><a href="#medicineDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-medkit"></i>Medicine Info</a>
//                        <ul id="medicineDropdown" class="collapse list-unstyled ">
//                            <li id="add-medicine-li" ><a id="add-medicine" class="link-page">Add Medicine</a></li>
//                            <li id="edit-medicine-li" ><a id="edit-medicine" class="link-page">Edit Medicine</a></li>
//                            <li id="delete-medicine-li" ><a id="delete-medicine" class="link-page">Delete Medicine</a></li>
//                            <li id="view-medicine-li" ><a id="view-medicine" class="link-page">View Medicines</a></li>
//                        </ul>
//                    </li>
//                
//                    <li class="account-settings-li"><a id="account-settings" class="link-page"> <i class="icon-settings"></i>Account Settings </a></li>
//                </ul>
//            </nav>';
//            } else if ($userTypeID == 2) {
//                echo '<nav id="sidebar">
//                <!-- Sidebar Header-->
//                <div class="sidebar-header d-flex align-items-center">
//                    <div class="avatar"><img src="../../images/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
//                    <div class="title">
//                        <h1 class="h5"> Mohamed Ahmed</h1>
//                        <p>Private Doctor</p>
//                    </div>
//                </div>
//                
//                
//                <!-- Sidebar Navidation Menus-->
//                <ul class="list-unstyled">
//                    <li class="active"><a class="link-page"> <i class="icon-home"></i>Home </a></li>
//                    <li><a href="#surgeryDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-user-md"></i>Surgeries</a>
//                    <ul id="surgeryDropdown" class="collapse list-unstyled ">
//                            <li id="make-surgery-li" ><a id="make-surgery" class="link-page">Make a sugery</a></li>
//                            <li id="edit-surgery-li" ><a id="edit-surgery" class="link-page">Edit a surgery</a></li>
//                        </ul>
//                    </li>
//                    
//                    
//                    <li class="create-report-li-father view-report-li-father"><a href="#medicalreportsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-wpforms"></i>Medical Reports</a>
//                        <ul id="medicalreportsDropdown" class="collapse list-unstyled ">
//                            <li id="create-report-li" ><a id="create-report" class="link-page">Create Medical Report</a></li>
//                            <li id="view-report-li" ><a id="view-report" class="link-page">View Medical Report</a></li>
//                        </ul>
//                    </li>
//                    
//                    <li class="add-medicine-li-father edit-medicine-li-father delete-medicine-li-father view-medicine-li-father"><a href="#medicineDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-medkit"></i>Medicine Info</a>
//                        <ul id="medicineDropdown" class="collapse list-unstyled ">
//                            <li id="add-medicine-li" ><a id="add-medicine" class="link-page">Add Medicine</a></li>
//                            <li id="edit-medicine-li" ><a id="edit-medicine" class="link-page">Edit Medicine</a></li>
//                            <li id="delete-medicine-li" ><a id="delete-medicine" class="link-page">Delete Medicine</a></li>
//                            <li id="view-medicine-li" ><a id="view-medicine" class="link-page">View Medicines</a></li>
//                        </ul>
//                    </li>
//                
//                    <li class="account-settings-li"><a id="account-settings" class="link-page"> <i class="icon-settings"></i>Account Settings </a></li>
//                </ul>
//            </nav>';
//            } else if ($userTypeID == 3) {
//                echo '<nav id="sidebar">
//                <!-- Sidebar Header-->
//                <div class="sidebar-header d-flex align-items-center">
//                    <div class="avatar"><img src="../../images/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
//                    <div class="title">
//                        <h1 class="h5">Mohamed Ahmed</h1>
//                        <p>Preoperative Doctor</p>
//                    </div>
//                </div>
//                
//                <!-- Sidebar Navidation Menus-->
//                <ul class="list-unstyled">
//                    <li class="active"><a class="link-page"> <i class="icon-home"></i>Home </a></li>
//                    
//                    <li class="view-report-li-father create-report-li-father"><a href="#medicalreportsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-wpforms"></i>Medical Reports</a>
//                        <ul id="medicalreportsDropdown" class="collapse list-unstyled ">
//                            <li id="create-report-li" ><a id="create-report" class="link-page">Create Medical Reports</a></li>
//                            <li id="view-report-li" ><a id="view-report" class="link-page">View Medical Reports</a></li>
//                        </ul>
//                    </li>
//                    
//                    <li class="view-medicine-li-father"><a href="#medicineDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-medkit"></i>Medicine Info</a>
//                        <ul id="medicineDropdown" class="collapse list-unstyled ">
//                            <li id="view-medicine-li" ><a id="view-medicine" class="link-page">View Medicines</a></li>
//                        </ul>
//                    </li>
//                
//                    <li class="account-settings-li"><a id="account-settings" class="link-page"> <i class="icon-settings"></i>Account Settings </a></li>
//                </ul>
//            </nav>';
//            } else if ($userTypeID == 4) {
//                echo '<nav id="sidebar">
//                <!-- Sidebar Header-->
//                <div class="sidebar-header d-flex align-items-center">
//                    <div class="avatar"><img src="../../images/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
//                    <div class="title">
//                        <h1 class="h5">Hossam Mohamed</h1>
//                        <p>Receptionist</p>
//                    </div>
//                </div>
//                <!-- Sidebar Navidation Menus-->
//                <ul class="list-unstyled">
//                    <li id="profile-li" class="active profile-li"><a id="profile" class=" link-page"> <i class="icon-home"> </i>Home </a></li>
//                    <li  class="add-Patient-li-father edit-Patient-li-father  show-Patient-li-father">
//                        <a href="#employeeDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-user"></i>Patient</a>
//                        <ul id="employeeDropdown" class="collapse list-unstyled">
//                            <li id="add-Patient-li"><a id="add-Patient" class="link-page">Add Patient</a></li>
//                            <li id="edit-Patient-li"><a id="edit-Patient" class="link-page">Edit Patient</a></li>
//                            <li id="show-Patient-li"><a id="show-Patient"class="link-page">Show Patients</a></li>
//                        </ul>
//                        
//                    </li>
//                    <li  >
//                        <a class="link-page" id="Reserve"> <i class="icon-check"></i>Reserve</a>
//                    </li>
//                    <li  >
//                        <a  class="link-page" id="surgery_approval"> <i class="icon-check"></i>Surgery Approval</a>
//                    </li>
//                   
//                    <li class="account-settings-li"><a id="account-settings" class="link-page"> <i class="icon-settings"></i>Account Settings </a></li>
//
//            </nav>';
//            } else if ($userTypeID == 5) {
//                echo '<nav id="sidebar">
//                <!-- Sidebar Header-->
//                <br>
//                <div class="sidebar-header d-flex align-items-center">
//                
//                    <div class="avatar"><img src="../../images/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
//                    <div class="title">
//                        <h1 class="h5">Mostafa hammad</h1>
//                        <p>Accountant</p>
//                    </div>
//                </div>
//                <!-- Sidebar Navidation Menus-->
//                <ul class="list-unstyled">
//                    <li class="active"><a class="link-page"> <i class="icon-home"></i>Home </a></li>
//               
//               
//               <li  class="empsal-li-father editSal-li-father">
//                        <a href="#employeeDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-user"></i>Employees salaries</a>
//                        <ul id="employeeDropdown" class="collapse list-unstyled">
//                            <li id="empsal-li"><a id="empsal" class="link-page">View Employees salaries</a></li>
//                            <li id="editSal-li"><a id="editSal" class="link-page">Edit Employee salaries</a></li>
//                           
//                           
//                        </ul>
//                    </li>
//                    
//                    
//                 
//                     
//                    
//                    <li class="otherpayments-li-father paheName2-li-father"><a href="#paymentsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-check"></i>Payments</a>
//                        <ul id="paymentsDropdown" class="collapse list-unstyled ">
//                       <li class="otherpayments-li-father viewpayments-li-father"><a href="#paymentsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-check"></i>Submit Payments</a>
//                            
//                            <li id="otherpayments-li "><a id="otherpayments" class="link-page">Add Payment</a></li>
//                            <li id="viewpayments-li"><a id = "viewpayments"class="link-page">View Payments</a></li>
//                        </li>
//                      <li class="patienttrans-li-father "><a href="#paymentsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-check"></i>Patient Transactions</a>
//                            
//                            <li id="otherpayments-li "><a id="otherpayments" class="link-page">Add Payment</a></li>
//                            <li id="patienttrans-li"><a id = "patienttrans"class="link-page">View Payments</a></li>
//                        </li>
//            
//                        </ul>
//      
//                    </li>
//                    <li id="statistics-li"><a id="statistics" class="link-page"> <i class="fa fa-bar-chart"></i>Statistics</a></li>
//                    <li class="account-settings-li"><a id="account-settings" class="link-page"> <i class="icon-settings"></i>Account Settings </a></li>
//                </ul>
//            </nav>';
//            }
            ?>

            <div class="page-content">
                <div class="col-lg-12">
                    <div class="block">
                        <div class="title"><strong>TODO List</strong></div>
                        <div class="todo">
                            <div id="myDIV" class="header">
                                <h2>.</h2>
                                <input type="text" id="myInput" placeholder="Title...">
                                <span id="todo-btn" class="addBtn">Add</span>
                            </div>

                            <ul id="myUL">
                                <li class="do">Hit the gym</li>
                                <li class="do checked">Pay bills</li>
                                <li class="do">Meet George</li>
                                <li class="do">Buy eggs</li>
                                <li class="do">Read a book</li>
                                <li class="do">Organize office</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="../../js/libraries/jquery-3.2.1.min.js"></script>
        <script src="../../js/libraries/bootstrap.min.js"></script>
        <script src="../../js/libraries/front.js"></script>
        <script src="../../js/linker.js"></script>
        <script src="../../js/todo.js"></script>

    </body>
</html>