<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="savecustomer.php" method="post">
<center><h4><i class="icon-plus-sign icon-large"></i> Add Customer</h4></center>
<hr>
<div id="ac">

<span>Customer ID </span><input type="text" style="width:265px; height:30px;" name="customer_id" placeholder="Customer ID"/><br>
<span>Name : </span><input type="text" style="width:265px; height:30px;" name="customer_name" placeholder="Name"/><br>
<span>Contact : </span><input type="text" style="width:265px; height:30px;" name="customer_contact" placeholder="Contact"/><br>
<span>Product ID </span><input type="text" style="width:265px; height:30px;" name="product_id" placeholder="Product ID"/><br>
<span>Purchase Date </span><input type="date" style="width:265px; height:30px;" name="purchase_date" placeholder="Purchase Date"/><br>

<div style="float:right; margin-right:10px;">
<button class="btn btn-success btn-block" style="width:267px;"><i class="icon icon-save"></i> Save</button>
</div>
</div>
</form>