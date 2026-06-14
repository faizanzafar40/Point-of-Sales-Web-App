<?php
session_start();
include('../connect.php');

$a = $_POST['employee_id'];
$b = $_POST['employee_name'];
$c = $_POST['employee_address'];
$d = $_POST['employee_contact'];
$e = $_POST['joining_date'];

$sql = "INSERT INTO employee (employee_id,employee_name,employee_address,employee_contact,joining_date) VALUES (:a,:b,:c,:d,:e)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e));
header("location: employee_admin.php");


?>