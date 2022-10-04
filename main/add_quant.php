<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Add Quantity</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../asset/mm_training.css" type="text/css" />
<style>
input, button, select, textarea {
width:100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
}
button[type=submit] {
    background-color: #4CAF50;
    color: white;
}
.content {
width:100%;
    background-color: #f1f1f1;
    padding: 20px;
	border-radius:5px;
}
</style>

</head>
<body bgcolor="#D3DCE6">
<body class="ga">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr bgcolor="3300000">
	<td width="15" nowrap="nowrap"><img src="../asset/mm_spacer.gif" alt="" width="15" height="1" border="0" /></td>
	<td height="70" colspan="2" class="logo" nowrap="nowrap">KADUNA TO ABUJA<span class="tagline"> TRAIN BOOKING SYSTEM </span></td>
	<td width="100%">&nbsp;</td>
	</tr>

	<tr bgcolor="fffffff">
	<td colspan="4"><img src="../asset/mm_spacer.gif" alt="" width="1" height="4" border="0" /></td>
	</tr>

	<tr bgcolor="ffffff">
	<td colspan="4"><img src="asset/mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
	</tr>

	<tr bgcolor="#FFCC00">
	<td width="15" nowrap="nowrap">&nbsp;</td>
	<td width="755" colspan="2" height="24">
	<table border="0" cellpadding="0" cellspacing="0" id="navigation">
        <tr>
          <td class="navText" align="center" nowrap="nowrap"><a href="index.php">HOME</a></td>
		  <td class="navText" align="center" nowrap="nowrap"><a href="add_item.php">ADD TRAIN</a></td>
		  <td class="navText" align="center" nowrap="nowrap"><a href="add_quant.php">ADD TRAIN SEATS</a></td>
		  <td class="navText" align="center" nowrap="nowrap"><a href="view_item.php">VIEW TRAIN</a></td>
		  <td class="navText" align="center" nowrap="nowrap"><a href="index1.php">SALE TRAIN TICKETS</a></td>
		   <td class="navText" align="center" nowrap="nowrap"><a href="record.php">RECORD</a></td>
        </tr>
      </table>	</td>
	<td width="100%">&nbsp;</td>
	</tr>

	<tr bgcolor="#D3DCE6">
	<td colspan="4"><img src="asset/mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
	</tr>

	<tr bgcolor="#FFffff">
	<td colspan="4"><img src="asset/mm_spacer.gif" alt="" width="1" height="4" border="0" /></td>
	</tr>

	<tr bgcolor="#D3DCE6">
	<td colspan="4"><img src="asset/mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
	</tr>

	<tr bgcolor="#D3DCE6">
	<td width="15" valign="top">&nbsp;</td>
	<td width="35"><img src="asset/mm_spacer.gif" alt="" width="35" height="1" border="0" /></td>
	<td width="710" valign="top"><br />
	&nbsp;<br />
	<table border="0" cellspacing="0" cellpadding="2" width="500">
		<tr>
		<td class="pageName">UPDATE TRAIN SEAT CAPACITY</td>
		</tr>

		<tr>
		<td class="bodyText">
<div align="center">
   <div align="center" class="content">
   
<table width="658" cellpadding="3">
<form action="add_quant_ac.php" method="post" enctype="multipart/form-data">
  <tr>
    <td width="180">Select Train
	<select name="item_id">
	<?php
	include('../connect.php');
	
	$sql="SELECT * FROM item ORDER BY item_id DESC";
	$result=mysqli_query($dbcon,$sql);
	?>
		<option value="">-----Select Trian-----</option>
	<?php
	while($rows=mysqli_fetch_assoc($result)){
	?>
		<option value="<?php echo $rows['item_name'];  ?>"><?php echo $rows['item_name'];  ?></option>
	<?php
	}
	?>
	</select>
    <td width="201">Item Quantity:<input type="number" name="quant" placeholder="Enter Seats Capacity" required/></td>
  </tr>
  
  
  <tr>
    <td colspan="2" align="center"><button type="submit" value="Add">ADD</button></td>
  </tr>
  </form>
</table>


</div>
</div>	
		
		
		
		
		
		<br /></td>
		</tr>
	</table>
	 <br />	</td>
	<td>&nbsp;</td>
	</tr>

	<tr>
	<td width="15">&nbsp;<br />
	&nbsp;<br />	</td>
    <td width="35">&nbsp;</td>
    <td width="710">&nbsp;</td>
	<td width="100%">&nbsp;</td>
  </tr>
</table>
</body>
</html>

