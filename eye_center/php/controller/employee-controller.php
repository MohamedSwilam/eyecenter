<?php

$userID = $_POST['userID'];
$to = $_POST['to'];

// IN PHP PHASE -> Check if the user has the right to access or not using ID.

if ($to == "edit") {
    echo '<div class="col-lg-12">
                    <div class="block">
                        <div class="title"><strong>Edit Employee</strong></div>

                        <div class="block-body">
                            <form class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Type</label>
                                    <div class="col-sm-9 select">
                                        <select name="account" class="form-control mb-3" disabled>
                                            <option>Administrstor</option>
                                            <option selected>Receptionist</option>
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
                                        <input type="text" value="Mohamed Ehab Swilam" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" value="mohamed_swilam@hotmail.com" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Mobile</label>
                                    <div class="col-sm-9">
                                        <input type="mobile" value="01096436702" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Address</label>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <input type="text" value="Egypt" placeholder="Country" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" value="Cairo" placeholder="City" class="form-control">
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" value="Heliopolis" placeholder="Street" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Birthdate</label>
                                    <div class="col-sm-9">
                                        <input type="date" value="1997-10-18" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Gender</label>
                                    <div class="col-sm-9">
                                        <div class="i-checks">
                                            <input id="radioCustom1" type="radio" value="male" checked name="a" class="radio-template">
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
                                                <input type="text" class="form-control" value="10500">
                                                <div class="input-group-append"><span class="input-group-text">.00</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    
                                <button type="submit" class="btn btn-danger col-sm-5 ml-auto btn-edit-employee-cancel">Cancel</button>
                                <button type="submit" class="btn btn-success col-sm-5 ml-auto">Update</button>
                            </form>
                        </div>
                    </div>
                </div>';
} else if ($to == "delete") {
    echo '<div class="col-lg-12">
                    <div class="block">
                        <div class="title"><strong>Delete Employee</strong></div>

                        <div class="block-body">
                            <form class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Type</label>
                                    <div class="col-sm-9 select">
                                        <select name="account" class="form-control mb-3" disabled>
                                            <option>Administrstor</option>
                                            <option selected>Receptionist</option>
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
                                        <input disabled type="text" value="Mohamed Ehab Swilam" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Email</label>
                                    <div class="col-sm-9">
                                        <input disabled type="email" value="mohamed_swilam@hotmail.com" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Mobile</label>
                                    <div class="col-sm-9">
                                        <input disabled type="mobile" value="01096436702" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Address</label>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <input disabled type="text" value="Egypt" placeholder="Country" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <input disabled type="text" value="Cairo" placeholder="City" class="form-control">
                                            </div>
                                            <div class="col-md-5">
                                                <input disabled type="text" value="Heliopolis" placeholder="Street" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Birthdate</label>
                                    <div class="col-sm-9">
                                        <input disabled type="date" value="1997-10-18" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Gender</label>
                                    <div class="col-sm-9">
                                        <div class="i-checks">
                                            <input disabled id="radioCustom1" type="radio" value="male" checked name="a" class="radio-template">
                                            <label for="radioCustom1">Male</label>
                                            <input disabled id="radioCustom2" type="radio" value="female" name="a" class="radio-template" style="margin-left: 50px;">
                                            <label for="radioCustom2">Female</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Salary</label>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                                <input disabled type="text" class="form-control" value="10500">
                                                <div class="input-group-append"><span class="input-group-text">.00</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    
                                <button type="submit" class="btn btn-danger col-sm-5 ml-auto btn-delete-employee-cancel">Cancel</button>
                                <button type="submit" class="btn btn-success col-sm-5 ml-auto">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>';
} else if ($to == "show") { 
    echo '<div class="col-lg-12">
                    <div class="block">
                        <div class="title"><strong>Show Employees</strong></div>

                        <div class="block-body">
                            <form class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Type</label>
                                    <div class="col-sm-9 select">
                                        <select name="account" class="form-control mb-3" disabled>
                                            <option>Administrstor</option>
                                            <option selected>Receptionist</option>
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
                                        <input disabled type="text" value="Mohamed Ehab Swilam" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Email</label>
                                    <div class="col-sm-9">
                                        <input disabled type="email" value="mohamed_swilam@hotmail.com" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Mobile</label>
                                    <div class="col-sm-9">
                                        <input disabled type="mobile" value="01096436702" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Address</label>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <input disabled type="text" value="Egypt" placeholder="Country" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <input disabled type="text" value="Cairo" placeholder="City" class="form-control">
                                            </div>
                                            <div class="col-md-5">
                                                <input disabled type="text" value="Heliopolis" placeholder="Street" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Birthdate</label>
                                    <div class="col-sm-9">
                                        <input disabled type="date" value="1997-10-18" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Gender</label>
                                    <div class="col-sm-9">
                                        <div class="i-checks">
                                            <input disabled id="radioCustom1" type="radio" value="male" checked name="a" class="radio-template">
                                            <label for="radioCustom1">Male</label>
                                            <input disabled id="radioCustom2" type="radio" value="female" name="a" class="radio-template" style="margin-left: 50px;">
                                            <label for="radioCustom2">Female</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Salary</label>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                                <input disabled type="text" class="form-control" value="10500">
                                                <div class="input-group-append"><span class="input-group-text">.00</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    
                                <button type="submit" class="btn btn-danger col-sm-5 ml-auto btn-show-employee-back">Back</button>
                            </form>
                        </div>
                    </div>
                </div>';
}