<?php
$userID = $_POST['userID'];

// IN PHP PHASE -> Check if the user has the right to access or not using ID.

if ($userID == 1) {
    echo '<div class="col-lg-12">
    <div class="block">
        <div class="title"><strong>Add Employee</strong></div>
        <div class="form-group row ">

            <div class="col-sm-10">
               
                <label class="col-sm-2 form-control-label">Patient Name</label>
                <input class="col-sm-2" type="text" placeholder="First Name">
                <input class="col-sm-2" type="text" placeholder="Last Name">
                <input class="col-sm-2" type="text" placeholder="Family Name">
              <label class="col-sm-2 form-control-label"></label>
                <label class="col-sm-2 form-control-label ml-auto ">Telephone No.</label>
                <input class="col-sm-8" type="text" placeholder="ex: 0123456789">

                <label class="col-sm-2 form-control-label ml-auto">Date of Birth</label>
                <input type="date" class="col-sm-8">

                <label class="col-sm-2 form-control-label ml-auto">Patient Job</label>
                <input class="col-sm-8" type="text" placeholder="ex: Doctor">
                <label class="col-lg-2 form-control-label ">Patient Add.</label>
                <input class="col-sm-2" type="text" placeholder="Country">
                <input class="col-sm-2" type="text" placeholder="City">
                <input class="col-sm-2" type="text" placeholder="Disrict">
                <input class="col-sm-2" type="text" placeholder="Street">
                <center>
                    <button type="submit" class="col-sm-4 btn btn-primary">Add Patient</button>
                </center>
            </div>
        </div>';
} else {
    echo $page;
}
?>

