<?php
$conn = mysqli_connect("localhost","root","","dbms");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$nm=$_POST['name'];
$age=$_POST['age'];
$sex=$_POST['sex'];
$st=$_POST['state'];
$cy=$_POST['country'];
$pn=$_POST['phno'];
$adr=$_POST['add'];
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];
$btsy=$_POST['btsy'];
$blsy=$_POST['blsy'];
$ssq = "insert into user values ('$uid','$pwd','$nm');";
if (mysqli_query($conn, $ssq)) {
    echo "successful";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
$ssd = "insert into user_info values ('$uid','$nm','$age','$sex','$st','$cy','$pn','$adr');";
if (mysqli_query($conn, $ssd)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
$sata = "insert into user_info1 values ('$btsy','$blsy','$uid');";
if (mysqli_query($conn, $sata)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
header('Location: User.html');
mysqli_close($conn);
?>