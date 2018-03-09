<html>
    <body>

<?php 
echo'
<div class="col-lg-12">
                    <div class="block block1">
                        <div class="title"><strong>Edit Medicine</strong></div>
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
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Search">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <table class="table table-hover" >
                            <thead class="bg-primary">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Expired Date</th>
                                    <th scope="col">Specifications</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>04698</td>
                                    <td><input type="text" value="Oxycodone"></td>
                                    <td><input type="text" value="Blood Pressure"></td>
                                    <td><input type="text" value="23-5-2020"></td>
                                    <td><input type="text" value="Info and some specifications"></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>04698</td>
                                    <td><input type="text" value="Oxycodone"></td>
                                    <td><input type="text" value="Blood Pressure"></td>
                                    <td><input type="text" value="23-5-2020"></td>
                                    <td><input type="text" value="Info and some specifications"></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>04698</td>
                                    <td><input type="text" value="Oxycodone"></td>
                                    <td><input type="text" value="Blood Pressure"></td>
                                    <td><input type="text" value="23-5-2020"></td>
                                    <td><input type="text" value="Info and some specifications"></td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>04698</td>
                                    <td><input type="text" value="Oxycodone"></td>
                                    <td><input type="text" value="Blood Pressure"></td>
                                    <td><input type="text" value="23-5-2020"></td>
                                    <td><input type="text" value="Info and some specifications"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="line"></div>
                    <center>    <div class="form-group row">
                                    <div class="col-sm-9 ml-auto">
                                        <button type="submit" class="btn btn-secondary">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div> </center>
    ';
    ?>

<script src="../../js/libraries/jquery-3.2.1.min.js"></script>
        <script src="../../js/libraries/bootstrap.min.js"></script>
        <script src="../../js/libraries/front.js"></script>
        <script src="../../js/linker.js"></script>
        <script src="../../js/profile.js"></script>
        <script src="../../js/todo.js"></script>

    </body>
</html>