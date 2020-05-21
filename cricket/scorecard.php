<?php
$conn = mysqli_connect("localhost","root","","dbms");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$mt=$_POST['matid'];
$wks="0";
$bbsn=$_POST['btsnm'];
$bbn=$_POST['btnm'];
$or=$_POST['over'];
$bwn=$_POST['blnm'];
$rn=$_POST['runs'];
$ext=$_POST['ext'];
$out=$_POST['wk'];
$one="1";
$two="2";
$three="3";
$four="4";
$five="5";
$six="6";
$ot="out";
$b=$mt.$one;
$c=$mt.$two;
$d=$mt.$three;
$e=$mt.$four;
$f=$mt.$five;
$g=$mt.$six;
$zero="0";
$card="select scorecard from $b";
$resu = mysqli_query($conn,$card);
while($ro = mysqli_fetch_assoc($resu)) {
	$zero=$ro['scorecard'];
}
$sr=$zero+$rn+$ext;
//$curwk="select max(wickets) from $b";
if($out==$ot) {
	$wks=$wks+$one;
}
$sql = "insert into $b values ('$sr','$or','$bbsn','$bbn','$bwn','$rn','$wks','$ext');";
if (mysqli_query($conn, $sql)) {
    echo "Inserted Record successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
if($rn==$four) {
	$sql1 = "insert into $d (btsnm,runs,balls,four,match_id) values ('$bbsn','$rn','$one','$one','$mt');";
}
else if($rn==$six) {
	$sql1 = "insert into $d (btsnm,runs,balls,six,match_id) values ('$bbsn','$rn','$one','$one','$mt');";
}
else {
$sql1 = "insert into $d (btsnm,runs,balls,match_id) values ('$bbsn','$rn','$one','$mt');";
}
if (mysqli_query($conn, $sql1)) {
    echo "Inserted Record successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
if($out==$ot) {
	$sql2 = "insert into $g values ('$bwn','$or','$rn','$one','$mt');";
}
else {
	$sql2 = "insert into $g (blnm,overs,runs,match_id) values ('$bwn','$or','$rn','$mt');";
}
if (mysqli_query($conn, $sql2)) {
    echo "Inserted Record successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);
if($_POST['sub'])
{
header('Location: livestats.html');
}
else{
	header('Location: match2ndsession.html');
}
?>