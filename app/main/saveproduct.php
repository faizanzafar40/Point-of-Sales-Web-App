<?php
session_start();
include('../connect.php');
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


$sql = "INSERT INTO products (product_id,product_brand,product_name,date_received,o_price,s_price,profit,total_quantity,qty_sold,qty_left,amount) VALUES (:a,:b,:c,:d,:e,:f,:g,:h,:i,:j,:k)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':g'=>$g,':h'=>$h,':i'=>$i,':j'=>$j,':k'=>$k));
header("location: products.php");


?>