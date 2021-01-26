<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveemployee.php" method="post">
<center><h4><i class="icon-plus-sign icon-large"></i> Add Employee</h4></center>
<hr>
<div id="ac">
<span>Employee ID </span><input type="text" style="width:265px; height:30px;" name="employee_id" placeholder="Employee ID" Required/><br>
<span>Employee Name </span><input type="text" style="width:265px; height:30px;" name="employee_name" placeholder="Employee name" Required/><br>
<span>Address : </span><input type="text" style="width:265px; height:30px;" name="employee_address" placeholder="Address"/><br>
<span>Contact : </span><input type="text" style="width:265px; height:30px;" name="employee_contact" placeholder="Contact"/><br>
<span>Joining Date: </span><input type="date" style="width:265px; height:30px;" name="joining_date" placeholder=" Joining Date"/><br>
<div style="float:right; margin-right:10px;">
<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save"></i> Save</button>
</div>
</div>
</form>