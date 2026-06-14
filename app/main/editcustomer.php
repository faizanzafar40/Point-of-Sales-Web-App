<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM customer WHERE customer_id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveeditcustomer.php" method="post">
<center><h4><i class="icon-edit icon-large"></i> Edit Customer</h4></center>
<hr>
<div id="ac">
<input type="hidden" name="memi" value="<?php echo $id; ?>" />

<span>Customer ID : </span><input type="text" style="width:265px; height:30px;" name="customer_id" value="<?php echo $row['customer_id']; ?>" /><br>
<span>Full Name : </span><input type="text" style="width:265px; height:30px;" name="customer_name" value="<?php echo $row['customer_name']; ?>" /><br>
<span>Contact : </span><input type="text" style="width:265px; height:30px;" name="customer_contact" value="<?php echo $row['customer_contact']; ?>" /><br>
<span>Product ID : </span><input type="text" style="width:265px; height:30px;" name="product_id" value="<?php echo $row['product_id']; ?>" /><br>
<span>Purchase Date: </span><input type="date" style="width:265px; height:30px;" name="purchase_date" value="<?php echo $row['purchase_date']; ?>" placeholder="Purchase Date"/><br>
<div style="float:right; margin-right:10px;">

<button class="btn btn-success btn-block" style="width:267px;"><i class="icon icon-save"></i> Save Changes</button>
</div>
</div>
</form>
<?php
}
?>