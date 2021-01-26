<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM products WHERE product_id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveeditproduct.php" method="post">
<center><h4><i class="icon-edit icon-large"></i> Edit Product</h4></center>
<hr>
<div id="ac">

<input type="hidden" name="memi" value="<?php echo $id; ?>" />

<span>Product ID : </span><input type="text" style="width:265px; height:30px;"  name="product_id" value="<?php echo $row['product_id']; ?>" Required/><br>

<span>Brand : </span><input type="text" style="width:265px; height:30px;"  name="product_brand" value="<?php echo $row['product_brand']; ?>" /><br>

<span>Name : </span><input type="text" style="width:265px; height:30px;"  name="product_name" value="<?php echo $row['product_name']; ?>" /><br>

<span>Date Received: </span><input type	="date" style="width:265px; height:30px;" name="date_received" value="<?php echo $row['date_received']; ?>" /><br>

<span>Original Price : </span><input type="text" style="width:265px; height:30px;" id="txt2" name="o_price" value="<?php echo $row['o_price']; ?>" onkeyup="sum();" Required/><br>

<span>Selling Price : </span><input type="text" style="width:265px; height:30px;" id="txt1" name="s_price" value="<?php echo $row['s_price']; ?>" onkeyup="sum();" Required/><br>

<span>Profit : </span><input type="text" style="width:265px; height:30px;" id="txt3" name="profit" value="<?php echo $row['profit']; ?>" readonly><br>

<span>Total Quantity : </span><input type="text" style="width:265px; height:30px;" name="total_quantity" id="txtB" min="0" onkeyup="sum();" value="<?php echo $row['total_quantity']; ?>" Required>

<span>Quantity Sold : </span><input type="text" style="width:265px; height:30px;" id="txtA" name="qty_sold" onkeyup="sum();" value="<?php echo $row['qty_sold']; ?>" Required ><br>

<span>Quantity Left : </span><input type="text" style="width:265px; height:30px;" min="0" id="txtC" name="qty_left" value="<?php echo $row['qty_left']; ?>" readonly ><br>

<span>Amount : </span><input type="text" style="width:265px; height:30px;" id="am" name="amount" value="<?php echo $row['amount']; ?>"readonly><br>


<div style="float:right; margin-right:10px;">

<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save Changes</button>
</div>
</div>
</form>
<?php
}
?>