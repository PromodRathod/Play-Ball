<?php
$conn = mysqli_connect("localhost","root","","dbms");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$var="select user_id from loggedin";
$ress=mysqli_query($conn, $var);

	$roww=mysqli_fetch_assoc($ress);
	$uid = $roww['user_id'];

if(isset($_POST['name']))
{
	$nm=$_POST['nm'];
	$nmu="update user_info set Name='$nm' where user_id='$uid'";
		if (mysqli_query($conn, $nmu)) {
    echo "successful";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
}
else if(isset($_POST['age']))
{
	$ag=$_POST['ag'];
	$nmu="update user_info set Age='$ag' where user_id='$uid'";
	if (mysqli_query($conn, $nmu)) {
    echo "successful";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
}
else if(isset($_POST['sex']))
{
	$sx=$_POST['sx'];
	$nmu="update user_info set Sex='$sx' where user_id='$uid'";
	if (mysqli_query($conn, $nmu)) {
    echo "successful";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
}
else if(isset($_POST['state']))
{
	$st=$_POST['st'];
	$nmu="update user_info set State='$st' where user_id='$uid'";
	if (mysqli_query($conn, $nmu)) {
    echo "successful";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
}
else if(isset($_POST['country']))
{
	$cy=$_POST['cy'];
	$nmu="update user_info set Country='$cy' where user_id='$uid'";
	if (mysqli_query($conn, $nmu)) {
    echo "successful";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
}
else if(isset($_POST['phone']))
{
	$pn=$_POST['pn'];
	$nmu="update user_info set Phone_no='$pn' where user_id='$uid'";
	if (mysqli_query($conn, $nmu)) {
    echo "successful";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
}
else if(isset($_POST['address']))
{
	$add=$_POST['add'];
	$nmu="update user_info set Address='$add' where user_id='$uid'";
	if (mysqli_query($conn, $nmu)) {
    echo "successful";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
}
else if(isset($_POST['batting']))
{
	$btsy=$_POST['btsy'];
	$nmu="update user_info1 set batting='$btsy' where user_id='$uid'";
	if (mysqli_query($conn, $nmu)) {
    echo "successful";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
}
else if(isset($_POST['bowling']))
{
	$blsy=$_POST['blsy'];
	$nmu="update user_info1 set bowling='$blsy' where user_id='$uid'";
	if (mysqli_query($conn, $nmu)) {
    echo "successful";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
}
header('Location: userinfo.php');
mysqli_close($conn);
?>