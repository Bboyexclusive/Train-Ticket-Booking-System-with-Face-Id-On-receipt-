<html>
<head>
	<style type="text/css">
	table{
		border: 1px solid #333;
		border-collapse: collapse;
		width: 100%;
}
table td{
	padding: 20px;
}

  .ga {
  background-image: url(images/a.jpeg);
    
    background-size: cover;
    background-repeat: no-repeat;
    height: 100vh;
    padding: 0;
    margin: 0;
</style>
</style>
</head>
<body class="ga">
</div>
<div id="content">
  <div align="left">
    <h1 align="center">invoicing record
    </h1>
  </div>
  <?php
  include('connect.php');
  
  $sta=0;
  $sql="SELECT * FROM record";
  $result=mysqli_query($dbcon,$sql);
  
  ?>
<center>  <table cellpadding="3" border="1" bgcolor="white">
 <tr>
    <th scope="col">Customers Name</th>
    <th align="center" scope="col">Customer Phone Number</th>
	<th scope="col">Customer Address</th>
	<th scope="col">Item Purchesd </th>
    <th scope="col">Price</th>
    <th scope="col">Quantity</th>
    <th scope="col">Total price</th>
    <th scope="col">date of transaction</th>
  </tr>
  <?php
  while($rows=mysqli_fetch_assoc($result)){
  ?>
  <tr>
    <td><?php echo $rows['name'];  ?></td>
    <td align="center"><?php echo $rows['phone'];  ?></td>
	 <td align="center"><?php echo $rows['address'];  ?></td>
    <td align="center"><?php echo $rows['item'];  ?></td>
	 <td align="center"><?php echo $rows['price'];  ?></td>
    <td align="center"><?php echo $rows['quant'];  ?></td>
	<td align="left"><?php echo $rows['total'];  ?></td>
	<td align="center"><?php echo $rows['date'];  ?></td>
	</tr>
	<?php
	}
	//close connection
	mysqli_close($dbcon);
	?>
</table></center>
<br><br><a href="index.php" id="link" title="Go to Home">Back</a>

</div>


</div>
</body>
</html>