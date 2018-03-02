<?php
$userID = $_POST['userID'];

if ($userID == 1) {
    echo ' 
       
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
    <div class="block">
        <div class="titel">
            <h4>New vision Patients </h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last visit date</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td><a href="#">hossam mohamed</a></td>
                            <td>___/___/___</td>

                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td><a href="#">mostafa ahmed</a></td>
                            <td>___/___/___</td>

                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td><a href="#">mohamed ehab</a></td>
                            <td>___/___/___</td>                         </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td><a href="#">mohamed ahmed</a></td>
                            <td>___/___/___</td>                         </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 ';
}
?>