<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['memi'];
$a = $_POST['employee_id'];
$b = $_POST['employee_name'];
$c = $_POST['employee_address'];
$d = $_POST['employee_contact'];
$e = $_POST['joining_date'];


$sql = "UPDATE employee 
        SET employee_id=?, employee_name=?, employee_address=?, employee_contact=?, joining_date=?
		WHERE employee_id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$d,$e,$id));
header("location: employee_admin.php");

?>