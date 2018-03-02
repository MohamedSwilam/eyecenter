<?php

$userID = $_POST['userID'];

// IN PHP PHASE -> Check if the user has the right to access or not using ID.

if ($userID == 1) {

    echo '<div class="col-lg-12">
                    <div class="block block1">
                        <div class="title"><strong>Show Employees</strong></div>
                        <div class="block-body">
                            <form class="form-horizontal">
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <button data-toggle="dropdown" type="button" class="btn btn-outline-secondary dropdown-toggle btn-dropdown" aria-expanded="true">ID <span class="caret"></span></button>
                                                <div class="dropdown-menu btn-dropdown-menu">
                                                    <a href="#" class="dropdown-item btn-dropdown-menu-item">ID</a>
                                                    <a href="#" class="dropdown-item btn-dropdown-menu-item">Name</a>
                                                    <a href="#" class="dropdown-item btn-dropdown-menu-item">Mobile</a>
                                                    <a href="#" class="dropdown-item btn-dropdown-menu-item">Email</a>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Search">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <table class="table own-table show-employee-table">
                            <thead class="thead-dark">
                                <tr id="table-head"  class="no-action">
                                    <th scope="col">#</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Mobile</th>
                                    <th scope="col">Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="02458">
                                    <th scope="row">1</th>
                                    <td>02458</td>
                                    <td>Mohamed Ehab Swilam</td>
                                    <td>Administrator</td>
                                    <td>mohamed_swilam@hotmail.com</td>
                                    <td>01096436702</td>
                                    <td>10500</td>
                                </tr>
                                <tr id="04698">
                                    <th scope="row">2</th>
                                    <td>04698</td>
                                    <td>Muhamed Ahmed</td>
                                    <td>Center Doctor</td>
                                    <td>mohamed_ahmed@hotmail.com</td>
                                    <td>01113689647</td>
                                    <td>8500</td>
                                </tr>
                                <tr  id="03675">
                                    <th scope="row">3</th>
                                    <td>03675</td>
                                    <td>Mostafa Ahmed Hammad</td>
                                    <td>Accountant</td>
                                    <td>mostafa_ahmed@hotmail.com</td>
                                    <td>01025632147</td>
                                    <td>6500</td>
                                </tr>
                                <tr id="04369">
                                    <th scope="row">4</th>
                                    <td>04369</td>
                                    <td>Hossam Mohamed</td>
                                    <td>Receptionist</td>
                                    <td>hossam_mohamed@hotmail.com</td>
                                    <td>01265987441</td>
                                    <td>4500</td>
                                </tr>
                                <tr id="04369">
                                    <th scope="row">4</th>
                                    <td>04369</td>
                                    <td>Hossam Mohamed</td>
                                    <td>Receptionist</td>
                                    <td>hossam_mohamed@hotmail.com</td>
                                    <td>01265987441</td>
                                    <td>4500</td>
                                </tr>
                                <tr id="04369">
                                    <th scope="row">4</th>
                                    <td>04369</td>
                                    <td>Hossam Mohamed</td>
                                    <td>Receptionist</td>
                                    <td>hossam_mohamed@hotmail.com</td>
                                    <td>01265987441</td>
                                    <td>4500</td>
                                </tr>
                                <tr id="04369">
                                    <th scope="row">4</th>
                                    <td>04369</td>
                                    <td>Hossam Mohamed</td>
                                    <td>Receptionist</td>
                                    <td>hossam_mohamed@hotmail.com</td>
                                    <td>01265987441</td>
                                    <td>4500</td>
                                </tr>
                                <tr id="04369">
                                    <th scope="row">4</th>
                                    <td>04369</td>
                                    <td>Hossam Mohamed</td>
                                    <td>Receptionist</td>
                                    <td>hossam_mohamed@hotmail.com</td>
                                    <td>01265987441</td>
                                    <td>4500</td>
                                </tr>
                                <tr id="04369">
                                    <th scope="row">4</th>
                                    <td>04369</td>
                                    <td>Hossam Mohamed</td>
                                    <td>Receptionist</td>
                                    <td>hossam_mohamed@hotmail.com</td>
                                    <td>01265987441</td>
                                    <td>4500</td>
                                </tr>
                                <tr id="04369">
                                    <th scope="row">4</th>
                                    <td>04369</td>
                                    <td>Hossam Mohamed</td>
                                    <td>Receptionist</td>
                                    <td>hossam_mohamed@hotmail.com</td>
                                    <td>01265987441</td>
                                    <td>4500</td>
                                </tr>
                                <tr id="04369">
                                    <th scope="row">4</th>
                                    <td>04369</td>
                                    <td>Hossam Mohamed</td>
                                    <td>Receptionist</td>
                                    <td>hossam_mohamed@hotmail.com</td>
                                    <td>01265987441</td>
                                    <td>4500</td>
                                </tr>
                                <tr id="04369">
                                    <th scope="row">4</th>
                                    <td>04369</td>
                                    <td>Hossam Mohamed</td>
                                    <td>Receptionist</td>
                                    <td>hossam_mohamed@hotmail.com</td>
                                    <td>01265987441</td>
                                    <td>4500</td>
                                </tr>
                                <tr id="04369">
                                    <th scope="row">4</th>
                                    <td>04369</td>
                                    <td>Hossam Mohamed</td>
                                    <td>Receptionist</td>
                                    <td>hossam_mohamed@hotmail.com</td>
                                    <td>01265987441</td>
                                    <td>4500</td>
                                </tr>
                                <tr id="04369">
                                    <th scope="row">4</th>
                                    <td>04369</td>
                                    <td>Hossam Mohamed</td>
                                    <td>Receptionist</td>
                                    <td>hossam_mohamed@hotmail.com</td>
                                    <td>01265987441</td>
                                    <td>4500</td>
                                </tr>
                                <tr id="04369">
                                    <th scope="row">4</th>
                                    <td>04369</td>
                                    <td>Hossam Mohamed</td>
                                    <td>Receptionist</td>
                                    <td>hossam_mohamed@hotmail.com</td>
                                    <td>01265987441</td>
                                    <td>4500</td>
                                </tr>
                                <tr id="04369">
                                    <th scope="row">4</th>
                                    <td>04369</td>
                                    <td>Hossam Mohamed</td>
                                    <td>Receptionist</td>
                                    <td>hossam_mohamed@hotmail.com</td>
                                    <td>01265987441</td>
                                    <td>4500</td>
                                </tr>
                                <tr id="04369">
                                    <th scope="row">4</th>
                                    <td>04369</td>
                                    <td>Hossam Mohamed</td>
                                    <td>Receptionist</td>
                                    <td>hossam_mohamed@hotmail.com</td>
                                    <td>01265987441</td>
                                    <td>4500</td>
                                </tr>
                                <tr id="04369">
                                    <th scope="row">4</th>
                                    <td>04369</td>
                                    <td>Hossam Mohamed</td>
                                    <td>Receptionist</td>
                                    <td>hossam_mohamed@hotmail.com</td>
                                    <td>01265987441</td>
                                    <td>4500</td>
                                </tr>
                                <tr id="04369">
                                    <th scope="row">4</th>
                                    <td>04369</td>
                                    <td>Hossam Mohamed</td>
                                    <td>Receptionist</td>
                                    <td>hossam_mohamed@hotmail.com</td>
                                    <td>01265987441</td>
                                    <td>4500</td>
                                </tr>
                                <tr id="04369">
                                    <th scope="row">4</th>
                                    <td>04369</td>
                                    <td>Hossam Mohamed</td>
                                    <td>Receptionist</td>
                                    <td>hossam_mohamed@hotmail.com</td>
                                    <td>01265987441</td>
                                    <td>4500</td>
                                </tr>
                                <tr id="04369">
                                    <th scope="row">4</th>
                                    <td>04369</td>
                                    <td>Hossam Mohamed</td>
                                    <td>Receptionist</td>
                                    <td>hossam_mohamed@hotmail.com</td>
                                    <td>01265987441</td>
                                    <td>4500</td>
                                </tr>
                                <tr id="04369">
                                    <th scope="row">4</th>
                                    <td>04369</td>
                                    <td>Hossam Mohamed</td>
                                    <td>Receptionist</td>
                                    <td>hossam_mohamed@hotmail.com</td>
                                    <td>01265987441</td>
                                    <td>4500</td>
                                </tr>
                                <tr id="04369">
                                    <th scope="row">4</th>
                                    <td>04369</td>
                                    <td>Hossam Mohamed</td>
                                    <td>Receptionist</td>
                                    <td>hossam_mohamed@hotmail.com</td>
                                    <td>01265987441</td>
                                    <td>4500</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="block block2"></div>
                </div>
                <script src="../../js/profile.js"></script>';
}