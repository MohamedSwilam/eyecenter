<html>
<body>
    <?php
echo'<div class="col-lg-12">
                    <div class="block block1">
                        <div class="title"><strong>Surgery Reports</strong></div>
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
                                    <th scope="col">Age</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Stage</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Comments</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>02458</td>
                                    <td>Mohamed Ehab</td>
                                    <td>21</td>
                                    <td>Male</td>
                                    <td>Preoperative</td>
                                    <td>23-5-2017</td>
                                    <td>3:00</td>
                                    <td>Info and some resons</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>04698</td>
                                    <td>Muhamed Ahmed</td>
                                    <td>21</td>
                                    <td>Male</td>
                                    <td>Preoperative</td>
                                    <td>23-3-2017</td>
                                    <td>1:00</td>
                                    <td>Info and some resons</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>03675</td>
                                    <td>Mostafa Ahmed</td>
                                    <td>21</td>
                                    <td>Male</td>
                                    <td>Preoperative</td>
                                    <td>23-5-2018</td>
                                    <td>12:00</td>
                                    <td>Info and some resons</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>04369</td>
                                    <td>Hossam Mohamed</td>
                                    <td>21</td>
                                    <td>Male</td>
                                    <td>Preoperative</td>
                                    <td>23-5-2019</td>
                                    <td>9:00</td>
                                    <td>Info and some resons</td>
                                </tr>
                            </tbody>
                        </table>
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