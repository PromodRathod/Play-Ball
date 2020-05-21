<?php
$conn=mysqli_connect("localhost","root","","dbms");
if(!$conn)
{
	die("Connection Failed : ".mysql_connect_error());
}
$t=$_POST['tid'];
$tn=$_POST['tnm'];
$p1=$_POST['pid1'];
$p2=$_POST['pid2'];
$p3=$_POST['pid3'];
$p4=$_POST['pid4'];
$p5=$_POST['pid5'];
$p6=$_POST['pid6'];
$p7=$_POST['pid7'];
$p8=$_POST['pid8'];
$p9=$_POST['pid9'];
$p10=$_POST['pid10'];
$p11=$_POST['pid11'];
$sql = "INSERT INTO team (team_id,team_name)
VALUES ('$t', '$tn');";
$sql1 = "INSERT INTO team1 (team_id,player_id)
VALUES ('$t', '$p1');";
$sql2 = "INSERT INTO team1 (team_id,player_id)
VALUES ('$t', '$p2');";
$sql3 = "INSERT INTO team1 (team_id,player_id)
VALUES ('$t', '$p3');";
$sql4 = "INSERT INTO team1 (team_id,player_id)
VALUES ('$t', '$p4');";
$sql5 = "INSERT INTO team1 (team_id,player_id)
VALUES ('$t', '$p5');";
$sql6 = "INSERT INTO team1 (team_id,player_id)
VALUES ('$t', '$p6');";
$sql7 = "INSERT INTO team1 (team_id,player_id)
VALUES ('$t', '$p7');";
$sql8 = "INSERT INTO team1 (team_id,player_id)
VALUES ('$t', '$p8');";
$sql9 = "INSERT INTO team1 (team_id,player_id)
VALUES ('$t', '$p9');";
$sql10 = "INSERT INTO team1 (team_id,player_id)
VALUES ('$t', '$p10');";
$sql11 = "INSERT INTO team1 (team_id,player_id)
VALUES ('$t', '$p11');";
if (mysqli_query($conn, $sql)) {
    echo "New record Inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
if (mysqli_query($conn, $sql1)) {
    echo "New record Inserted successfully";
} else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}
if (mysqli_query($conn, $sql2)) {
    echo "New record Inserted successfully";
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
}
if (mysqli_query($conn, $sql3)) {
    echo "New record Inserted successfully";
} else {
    echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
}
if (mysqli_query($conn, $sql4)) {
    echo "New record Inserted successfully";
} else {
    echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
}
if (mysqli_query($conn, $sql5)) {
    echo "New record Inserted successfully";
} else {
    echo "Error: " . $sql5 . "<br>" . mysqli_error($conn);
}
if (mysqli_query($conn, $sql6)) {
    echo "New record Inserted successfully";
} else {
    echo "Error: " . $sql6 . "<br>" . mysqli_error($conn);
}
if (mysqli_query($conn, $sql7)) {
    echo "New record Inserted successfully";
} else {
    echo "Error: " . $sql7 . "<br>" . mysqli_error($conn);
}
if (mysqli_query($conn, $sql8)) {
    echo "New record Inserted successfully";
} else {
    echo "Error: " . $sql8 . "<br>" . mysqli_error($conn);
}
if (mysqli_query($conn, $sql9)) {
    echo "New record Inserted successfully";
} else {
    echo "Error: " . $sql9 . "<br>" . mysqli_error($conn);
}
if (mysqli_query($conn, $sql10)) {
    echo "New record Inserted successfully";
} else {
    echo "Error: " . $sql10 . "<br>" . mysqli_error($conn);
}
if (mysqli_query($conn, $sql11)) {
    echo "New record Inserted successfully";
} else {
    echo "Error: " . $sql11 . "<br>" . mysqli_error($conn);
}
header('Location: AdminInfo.html');
mysqli_close($conn);
?>