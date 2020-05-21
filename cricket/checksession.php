<?php

$conn = mysqli_connect("localhost","root","","dbms");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$res=$_POST['sub'];
$f='First';
$s='Second';
if($res==$s)
{
header('Location: livestats1.html');
}
else{
	header('Location: livestats.html');
}
mysqli_close($conn);
?>
