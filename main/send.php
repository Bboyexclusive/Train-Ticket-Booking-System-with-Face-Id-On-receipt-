<?php
error_reporting(0);
$sql="INSERT INTO record(name, phone, address, item, quant, price, trans_id, date, total,picture)VALUES('$name', '$phone', '$address', '$item', '$quant', '$price', '$trans_id', '$date', '$total','$picture')";
$result=mysqli_query($dbcon,$sql);

if($result){
echo "<script>alert('Transaction Successful!')</script>";
}
else{
echo "<script>alert('Error: Transaction Unsuccessfully! Try Again!')</script>";
}
?>


<style>
input, button, td{
width:50%;
    padding: 12px;
    border-radius: 5px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
}
 input, button{
width:50%;
    padding: 12px;
	background-color:#999999;
    border-radius: 5px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
}
input:hover{background-color:#CCCCCC;}
.content {
width:100%;
    background-color: #f1f1f1;
    padding: 20px;
	border-radius:5px;
}

</style>
</head>
<body>
<div align="center">
   <div align="center" class="content">
   
<table width="800" cellpadding="3">
  <tr>
    <td>
      <img src="upload/<?php echo $picture; ?>" style="width: 150px;height: 150px;">
    </td>
  </tr>
<tr>
	<td width="30%"><strong>TRANSACTION ID:</strong> <?php echo "$trans_id"; ?></td>
</tr>
  <tr>
    <td><strong>Customer Name:</strong> <br><?php echo "$name"; ?></td>
    <td><strong>Customer Phone Number:</strong><br> <?php echo "$phone"; ?></td>
  </tr>
  <tr>
    <td><strong>Ticket Purchesd:</strong> <br><?php echo "$item"; ?></td>
	<td><strong>Price Per Ticket:</strong><br> #<?php echo "$price"; ?></td>
  </tr>
  <tr>
    <td><strong>Total Price of Purchase:</strong><br> #<?php echo "$total"; ?></td>
	<td><strong>Date of Transaction:</strong><br> <?php echo "$date"; ?></td>
  </tr>
  <tr>
	<td><strong>Customer Address:</strong><br> <?php echo "$address"; ?></td>
	<td><strong>Quantity:</strong><br> <?php echo "$quant"; ?></td>
  </tr>
  <tr>
    <td colspan="3" align="center"><input type="submit" name="Submit" value="Print Slip" onClick="javascript: window.print()"></td>
  </tr>
</table>
<?php
mysqli_close($dbcon);
session_destroy();
?>
</div>
</div>



</body>