<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['memi'];
$a = $_POST['product_id'];
$b = $_POST['product_brand'];
$c = $_POST['product_name'];
$d = $_POST['date_received'];
$e = $_POST['o_price'];
$f = $_POST['s_price'];
$g = $_POST['profit'];
$h = $_POST['total_quantity'];
$i = $_POST['qty_sold'];
$j = $_POST['qty_left'];
$k = $_POST['amount'];

$sql = "UPDATE products 
        SET product_id=?, product_brand=?, product_name=?, date_received=?, o_price=?, s_price=?, profit=?, total_quantity=?, qty_sold=?, qty_left=?, amount=?
		WHERE product_id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$id));
header("location: products.php");

?>