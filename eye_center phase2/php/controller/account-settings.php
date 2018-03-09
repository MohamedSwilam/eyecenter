<?php

echo '<div class="col-lg-12">
                    <div class="block">
                        <div class="title"><strong>Account Settings</strong></div>

                        <div class="block-body">
                            <form class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Theme</label>
                                    <div class="col-sm-9 select">
                                        <select name="account" class="form-control mb-3">
                                            <option>Red</option>
                                            <option selected>Green</option>
                                            <option>Pink</option>
                                            <option>violet</option>
                                            <option>Blue</option>
                                            <option>Sea</option>
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
                                    <label class="col-sm-3 form-control-label">Old Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">New Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Re-enter New Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" required>
                                    </div>
                                </div>
                                    
                                <button type="submit" class="btn btn-success col-sm-5 ml-auto">Apply Changes</button>
                            </form>
                        </div>
                    </div>
                </div>';
