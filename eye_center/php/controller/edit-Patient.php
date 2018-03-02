<?php
$userID = $_POST['userID'];

if ($userID == 1) {
    echo '<div class="col-lg-12">
    <div class="block">
        <div class="title"><strong>Search</strong></div>
        <div class="form-group">
       
            <div class="input-group col-sm-9">
                 
                <input type="text" class="form-control" placeholder="Search for Patient" >
                <div class="input-group-append">
                    <button type="button" class="btn btn-primary">Go!</button>
                </div>
            </div>
        </div>
        <br>
        <br>
          <div class="title"><strong>Edit Employee</strong></div>
        <div class="form-group row ">

            <div class="col-sm-10">
                       <label class="col-sm-2 form-control-label ">Patient ID.</label>
                <input  type="text" disabled="" placeholder="45454" class="col-sm-8">
                <label class="col-sm-2 form-control-label">Patient Name</label>
                <input class="col-sm-8" type="text" placeholder="Full Name">

                <label class="col-sm-2 form-control-label ml-auto">Telephone No.</label>
                <input class="col-sm-8" type="text" placeholder="ex: 0123456789">

                <label class="col-sm-2 form-control-label ml-auto">Date of Birth</label>
                <input type="date" class="col-sm-8">

                <label class="col-sm-2 form-control-label ml-auto">Patient Job</label>
                <input class="col-sm-8" type="text" placeholder="ex: Doctor">
                <label class="col-sm-2 form-control-label ">Patient Add.</label>
                <input class="col-sm-2" type="text" placeholder="Country">
                <input class="col-sm-2" type="text" placeholder="City">
                <input class="col-sm-2" type="text" placeholder="Disrict">
                <input class="col-sm-2" type="text" placeholder="Street">
                
         
                <center>
                    <button type="submit" class="col-sm-4 btn btn-primary">Edit Patient</button>
                </center>
            </div>


        </div>';
} else {
    echo $page;
}
?>

