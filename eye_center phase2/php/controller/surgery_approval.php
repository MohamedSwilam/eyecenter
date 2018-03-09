<?php
$userID = $_POST['userID'];

if ($userID == 1) {
echo' <div class="block">
        <div class="titel">
            <h4>Surgery Approval Table </h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Patient Name</th>
                            <th>Doctor Name</th>
                            <th>State</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td><a href="#">hossam mohamed</a></td>
                            <td>Tarek Abd Elwahab</td>
                            <td><span><strong></strong>Approved</span></td>

                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td><a href="#">mostafa ahmed</a></td>
                            <td>Tarek Abd Elwahab</td>
                            <td><span><strong></strong>Suspended</span></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td><a href="#">mohamed ehab</a></td>
                            <td>Tarek Abd Elwahab</td>
                            <td><span><strong></strong>rejected</span></td>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 ';
}