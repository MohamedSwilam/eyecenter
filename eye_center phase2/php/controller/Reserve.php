<?php
echo '<div class="block">
    <div class="titel">
        <h4>Surgery Approval Table </h4>
    </div>
    <br>
    <br>
    <center>
    <form method="POST">
    <button name="surgery" type="submit" class="col-sm-3 btn btn-primary">Surgery</button>
    <button type="submit" class="col-sm-3 btn btn-primary">Surgery Redo</button>
    <button type="submit" class="col-sm-3 btn btn-primary">Medical examination</button>
    </form>
     </center>
     <br>
    <br>
      
   
    
';
?>  
<label class="col-sm-3 form-control-label">Doctor Name</label>
<div class="col-sm-5 select">
    <select name="doctor-name" class="form-control mb-5">
        <option>Doctor 1</option>
        <option>Doctor 2</option>
        <option>Doctor 3</option>
        <option>Doctor 4</option>
    </select>
</div>
<label class="col-sm-3 form-control-label">Reservation Date</label>
<input class="col-sm-2" type="date" >
<div class="i-checks col-sm-2">
    <input id="checkboxCustom1" type="checkbox" value="" class="checkbox-template">
    <label for="checkboxCustom1">Today</label>
</div>
</div>