<?php
session_start();
include('../connect.php');
$a = $_POST['customer_id'];
$b = $_POST['customer_name'];
$c = $_POST['customer_contact'];
$d = $_POST['product_id'];
$e = $_POST['purchase_date'];

$sql = "INSERT INTO customer (customer_id,customer_name,customer_contact,product_id,purchase_date) VALUES (:a,:b,:c,:d,:e)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e));
header("location: customer.php");


?>