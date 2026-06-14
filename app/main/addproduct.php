<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveproduct.php" method="post">
<center><h4><i class="icon-plus-sign icon-large"></i> Add Product</h4></center>
<hr>
<div id="ac">

<span>Product ID : </span><input type="text" style="width:265px; height:30px;"  name="product_id" Required/><br>

<span>Brand : </span><input type="text" style="width:265px; height:30px;"  name="product_brand" /><br>

<span>Name : </span><input type="text" style="width:265px; height:30px;"  name="product_name" /><br>

<span>Date Received: </span><input type	="date" style="width:265px; height:30px;" name="date_received"  /><br>

<span>Original Price : </span><input type="text" id="txt2" style="width:265px; height:30px;" name="o_price" onkeyup="sum();" Required><br>

<span>Selling Price : </span><input type="text" id="txt1" style="width:265px; height:30px;" name="s_price" onkeyup="sum();" Required><br>

<span>Profit : </span><input type="text" id="txt3" style="width:265px; height:30px;" name="profit" readonly><br>

<span>Total Quantity : </span><input type="text" style="width:265px; height:30px;" name="total_quantity" id="txtB" min="0" onkeyup="sum();" Required>

<span>Quantity Sold : </span><input type="text" style="width:265px; height:30px;" id="txtA" name="qty_sold" onkeyup="sum();" Required ><br>

<span>Quantity Left : </span><input type="text" style="width:265px; height:30px;" min="0" id="txtC" name="qty_left" readonly ><br>

<span>Amount : </span><input type="text" style="width:265px; height:30px;" id="am" name="amount" readonly><br>

<div style="float:right; margin-right:10px;">
<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save</button>
</div>
</div>
</form>
