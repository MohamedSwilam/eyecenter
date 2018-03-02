<html>

<head>
    <link rel="stylesheet" href="../../css/designaccount.css">


</head>

</html>
<?php
echo '
 <div class="form-group row">
<label class="col-sm-3 form-control-label">From:</label>
<div class="col-sm-9">
<input type="date" class="form-control" required>
</div></div>

<div class="form-group row">
<label class="col-sm-3 form-control-label">To:</label>
<div class="col-sm-9">
<input type="date" class="form-control" required>
</div>
</div>

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
<button type="submit" class="btn btn-primary" id="btn" >Save changes</button>';

?>