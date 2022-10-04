<title>Add Item Quantity</title>
<?php
include('connect.php');

$id=$_POST['item_id'];
$quant=$_POST['quant'];

$sql="SELECT quantity FROM item WHERE item_name='$id'";
$result=mysql_query($sql);
//echo $sql;
$rows=mysql_fetch_assoc($result);
$qt=$rows['quantity'];
// count more value
$addquant=$qt+$quant;
$sql5="UPDATE item set quantity='$addquant' WHERE Item_name='$id'";
$result5=mysql_query($sql5);

if($result5){
echo "<script>alert('Item Value Updated Successfully!')</script>";
echo "<script>window.open('add_quant.php','_self')</script>";
}
else{
echo "<script>alert('Error: Item Update unsuccessfully!')</script>";
echo "<script>window.open('add_quant.php','_self')</script>";
}

mysql_close();


?>