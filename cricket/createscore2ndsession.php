<?php
$conn = mysqli_connect("localhost","root","","dbms");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$tm1=$_POST['tm1id'];
$tm2=$_POST['tm2id'];
$bt=$_POST['btnm'];
$o=$_POST['overs'];
$a=$_POST['mtid'];
$ssq = "insert into $a values ('$a','$tm1','$tm2','$bt','$o');";
header('Location: scoreupdate2ndsession.html');
?>