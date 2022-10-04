<html>
<head>
<title>Transaction feedback</title>
<?php
include('connect.php');

$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$item=$_POST['item'];
$quant=$_POST['quant'];
$price=$_POST['price'];
$picture=$_POST['picture'];
$pass=mt_rand();
$trans_id= substr($pass, 1, 8);
$date=date("d/m/y"); //create date time
$total=$quant*$price;

$sql2="SELECT * FROM item WHERE item_name='$item'";
$result2=mysqli_query($dbcon,$sql2);
//echo $sql;
$rows2=mysqli_fetch_assoc($result2);
$qt=$rows2['quantity'];
$item_id=$rows2['item_id'];
//echo $qt;


//Check if the quantity in the database is huge enough
if($qt>$quant)
{
$sub=$qt-$quant;
$sql5="update item set quantity='$sub' where item_id='$item_id'";
$result5=mysqli_query($dbcon,$sql5);
//echo $sql5;
include('send.php');
}
else{
echo "<script>alert('Error: The available Quantity is not up to the desired quantity!')</script>";
echo "Available Qunatity: "; echo $rows2['quantity'];
}
?>
<br>
<a href="trans.php">Back</a>