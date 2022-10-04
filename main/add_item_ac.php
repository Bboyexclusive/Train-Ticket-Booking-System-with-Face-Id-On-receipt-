<?php
include('connect.php');

$name=$_POST['name'];
$quant=$_POST['quant'];
$price=$_POST['price'];
$dest=$_POST['dest'];


$sql="INSERT INTO item(item_name, quantity, price, dest)VALUES('$name', '$quant', '$price', '$dest')";
$result=mysqli_query($dbcon,$sql);

if($result){
echo "<script>alert('Item Added Successfully!')</script>";
echo "<script>window.open('add_item.php','_self')</script>";
}
else{
echo "<script>alert('Error: Item was not added. Try again!')</script>";
echo "<script>window.open('add_item.php','_self')</script>";
}

?>