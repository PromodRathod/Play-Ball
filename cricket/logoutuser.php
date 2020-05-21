<?php
$conn = mysqli_connect("localhost","root","","dbms");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$del="delete from loggedin";
if (mysqli_query($conn, $del)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
header('Location: User.html');
mysqli_close($conn);
?>