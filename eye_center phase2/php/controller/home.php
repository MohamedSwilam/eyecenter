<?php

$userID = $_POST['userID'];

// IN PHP PHASE -> Check if the user has the right to access or not using ID.

if ($userID == 1) {
    echo '<div class="col-lg-12">
                    <div class="block">
                        <div class="title"><strong>TODO List</strong></div>
                        <div class="todo">
                            <div id="myDIV" class="header">
                                <h2>.</h2>
                                <input type="text" id="myInput" placeholder="Title...">
                                <span id="todo-btn" class="addBtn">Add</span>
                            </div>

                            <ul id="myUL">
                                <li class="do">Hit the gym</li>
                                <li class="do checked">Pay bills</li>
                                <li class="do">Meet George</li>
                                <li class="do">Buy eggs</li>
                                <li class="do">Read a book</li>
                                <li class="do">Organize office</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <script src="../../js/todo.js"></script>';
}else{
    echo $page;
}