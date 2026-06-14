<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM employee WHERE employee_id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveeditemployee.php" method="post">
<center><h4><i class="icon-edit icon-large"></i> Edit Employee</h4></center>
<hr>
<div id="ac">
<input type="hidden" name="memi" value="<?php echo $id; ?>" />

<span>Employee ID : </span><input type="text" style="width:265px; height:30px;" name="employee_id" value="<?php echo $row['employee_id']; ?>" /><br>
<span>Employee Name : </span><input type="text" style="width:265px; height:30px;" name="employee_name" value="<?php echo $row['employee_name']; ?>" /><br>
<span>Address : </span><input type="text" style="width:265px; height:30px;" name="employee_address" value="<?php echo $row['employee_address']; ?>" /><br>
<span>Contact : </span><input type="text" style="width:265px; height:30px;" name="employee_contact" value="<?php echo $row['employee_contact']; ?>" /><br>
<span>Joining Date: </span><input type="date" style="width:265px; height:30px;" name="joining_date" value="<?php echo $row['joining_date']; ?>" placeholder="Date"/><br>
<div style="float:right; margin-right:10px;">	

<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save"></i> Save Changes</button>
</div>
</div>
</form>
<?php
}
?>