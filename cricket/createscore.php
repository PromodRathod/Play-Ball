<?php
$conn = mysqli_connect("localhost","root","","dbms");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$one="1";
$two="2";
$three="3";
$four="4";
$five="5";
$six="6";
$tm1=$_POST['tm1id'];
$tm2=$_POST['tm2id'];
$bt=$_POST['btnm'];
$bw=$_POST['bwnm'];
$o=$_POST['overs'];
$a=$_POST['mtid'];
$b=$a.$one;
$c=$a.$two;
$d=$a.$three;
$e=$a.$four;
$f=$a.$five;
$g=$a.$six;
$ins = "insert into matches values ('$a','$tm1',$tm2');";
$sql = "CREATE TABLE $a (match_id varchar(10) not null,team1id int,team2id int,batting_team varchar(20) not null,overs decimal(3,1),primary key(match_id,batting_team))";
$ssq = "insert into $a (match_id,team1id,team2id,batting_team,overs) values ('$a','$tm1','$tm2','$bt','$o');";
if (mysqli_query($conn, $sql)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
if (mysqli_query($conn, $ssq)) {
    echo "inserted successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
$sql1 = "CREATE TABLE $b (scorecard int,overs decimal(3,1),bts1nm varchar(20),bts2nm varchar(20),blnm varchar(20),runs int,wickets int,extra int)";
if (mysqli_query($conn, $sql1)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
$sql2 = "CREATE TABLE $c (scorecard int,overs decimal(3,1),bts1nm varchar(20),bts2nm varchar(20),blnm varchar(20),runs int,wickets int,extra int)";
if (mysqli_query($conn, $sql2)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
$sql3 = "CREATE TABLE $d (btsnm varchar(20),runs int,balls int,four int default '0',six int default '0',match_id varchar(10))";
if (mysqli_query($conn, $sql3)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
$sql4 = "CREATE TABLE $e (btsnm varchar(20),runs int,balls int,four int default '0',six int default '0',match_id varchar(10))";
if (mysqli_query($conn, $sql4)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
$sql5 = "CREATE TABLE $f (blnm varchar(20),overs decimal(3,1),runs int,wickets int default '0',match_id varchar(10))";
if (mysqli_query($conn, $sql5)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
$sql6 = "CREATE TABLE $g (blnm varchar(20),overs decimal(3,1),runs int,wickets int default '0',match_id varchar(10))";
if (mysqli_query($conn, $sql6)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);
header('Location: scoreupdate.html'); 
?>