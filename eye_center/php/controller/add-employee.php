<?php

$userID = $_POST['userID'];

// IN PHP PHASE -> Check if the user has the right to access or not using ID.

if ($userID == 1) { 
    echo '<div class="col-lg-12">
                    <div class="block">
                        <div class="title"><strong>Add Employee</strong></div>

                        <div class="block-body">
                            <form class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Type</label>
                                    <div class="col-sm-9 select">
                                        <select name="account" class="form-control mb-3" required>
                                            <option>Administrstor</option>
                                            <option>Receptionist</option>
                                            <option>Center Doctor</option>
                                            <option>Private Doctor</option>
                                            <option>Preoperative Doctor</option>
                                            <option>Accountant</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Mobile</label>
                                    <div class="col-sm-9">
                                        <input type="mobile" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Address</label>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <input type="text" placeholder="Country" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" placeholder="City" class="form-control">
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" placeholder="Street" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Birthdate</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Gender</label>
                                    <div class="col-sm-9">
                                        <div class="i-checks">
                                            <input id="radioCustom1" type="radio" value="male" name="a" class="radio-template">
                                            <label for="radioCustom1">Male</label>
                                            <input id="radioCustom2" type="radio" value="female" name="a" class="radio-template" style="margin-left: 50px;">
                                            <label for="radioCustom2">Female</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Re-enter Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Salary</label>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                                <input type="text" class="form-control">
                                                <div class="input-group-append"><span class="input-group-text">.00</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 ml-auto">
                                        <button type="submit" class="btn btn-primary col-sm-12 ml-auto">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>';
}else{
    echo $page;
}