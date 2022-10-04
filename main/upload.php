<?php
session_start();
// new filename
$filename = 'pic_'.date('YmdHis') . '.jpeg';

$url = '';
if( move_uploaded_file($_FILES['webcam']['tmp_name'],'upload/'.$filename) ){
	$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/upload/' . $filename;

	$_SESSION['filename'] = $filename;
	echo "<script>alert('Capture Saved Successfully!','_self')</script>";
}

// Return image url
echo $url;