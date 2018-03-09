<html>
<head>
    <link rel="stylesheet" href="../../css/designaccount.css">

</head>


</html>

<?php

echo '<form class="form-horizontal"method="post">
 
         <div class="line"></div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Type:</label>
                                    <div class="col-sm-9 select">
                                        <select name="account" class="form-control mb-3">
                                            <option> in</option>
                                            <option>Out</option>
                                            
                                        </select>
                                    </div>
                                    </div>
 
 
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Amount:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" required>
                                    </div>
                                    
                                    </div>
                                     <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Date:</label>
                                    <div class="col-sm-9">
                                        <input type="datetime-local" class="form-control" required>
                                    </div>
                                    
                                    </div>
                                    
                                     <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Note:</label>
                                    <div class="col-sm-9">
                                    <textarea rows="4" cols="50" required class="form-control"></textarea>
                                        
                                    </div>
                                    
                                    </div>
                                    <button type="submit" class="btn btn-primary" id="btn" >Save changes</button>
                                    </form>';
?>

