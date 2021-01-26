<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['memi'];
$a = $_POST['customer_id'];
$b = $_POST['customer_name'];
$c = $_POST['customer_contact'];
$d = $_POST['product_id'];
$e = $_POST['purchase_date'];


$sql = "UPDATE customer 
        SET customer_id=?, customer_name=?, customer_contact=?, product_id=?, purchase_date=?
		WHERE customer_id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$d,$e,$id));
header("location: customer.php");

?>