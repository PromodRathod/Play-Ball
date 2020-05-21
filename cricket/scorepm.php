<html>
<head>
<title>Scorecard</title>

<style>

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 2400px;
  margin-left:140px;
  background-color: white; opacity: 0.8;
  text-align: left;
  font-family: 'Proxima Nova Soft', 'Helvetica Neue', sans-serif;
}

.title {
  color: grey;
  font-size: 22px;
}

table#table1 th {
background-color: black;
color: white;
}

tr {
text-align:center;

height:5px;
}


#mySidenav a {
  position: absolute;
  left: -100px;
  transition: 0.3s;
  padding: 15px;
  width: 100px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
  left: 0;
}


#back {
  top: 20px;
  background-color: lightgreen;
  color: black;
}


</style></head>

<body style="font-family:'Proxima Nova Soft', 'Helvetica Neue', sans-serif" background="icc.jpg">

<div id="mySidenav" class="sidenav">
  <a href="userinfo.php" id="back">Back</a>
</div>

<div style="background-color: #000000; color:white; margin-left:140px; opacity:0.8; padding:10px; font-family: 'Proxima Nova Soft', 'Helvetica Neue', sans-serif;">
<h2>Final Scorecard</h2>
</div>

<div class="card">
<div style="margin:25px">
<br>





<?php
$conn = mysqli_connect("localhost","root","","dbms");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$mtid=$_POST['mtid'];
$uid=$_POST['uid'];
$one="1";
$two="2";
$mt=$mtid.$one;
$mtt=$mtid.$two;
$ssq = "select * from $mtid";
$result=mysqli_query($conn,$ssq);
if(mysqli_num_rows($result)>0)
{
		$row=mysqli_fetch_assoc($result);
		$btnmn=$row['batting_team'];
		$tmid=$row['team1id'];
}
$ssq1 = "select * from team where team_id=$tmid";
$result1=mysqli_query($conn,$ssq1);
if(mysqli_num_rows($result1)>0)
{
		$roww=mysqli_fetch_assoc($result1);
		$tmnm=$roww['team_name'];
}
$ssqq = "select * from $mt";
$resultt=mysqli_query($conn,$ssqq);
if(mysqli_num_rows($resultt)>0)
{
		while($rowo=mysqli_fetch_assoc($resultt)) {
		$scr=$rowo['scorecard'];
		$ov=$rowo['overs'];
		$b1n=$rowo['bts1nm'];
		$b2n=$rowo['bts2nm'];
		$bln=$rowo['blnm'];
		$run=$rowo['runs'];
		$wk=$rowo['wickets'];
		$ex=$rowo['extra'];
		}
		
			echo '<h3>First Inning</h3>';
	echo '<h1><b>'.$btnmn.'</b></h1>';
	echo '<h2> <b>'.$scr.'/'.$wk.'</b></h2>';
	//echo '<b>'.$wk.'</b>';
	echo '<b>('.$ov.')</b><br><br>';
	echo 'Batsman 1 : <b>'.$b1n.'</b><br>';
	echo 'Batsman 2 : <b>'.$b2n.'</b><br>';
	echo 'Bowler : <b>'.$bln.'</b><br><br>';
	echo '</div></div>';
	echo '<div class="card">
<div style="margin:25px">
<br>';

}
$ssqs = "select * from $mtt";
$res=mysqli_query($conn,$ssqs);
if(mysqli_num_rows($res)>0)
{
		while($row=mysqli_fetch_assoc($res)) {
		$scrr=$row['scorecard'];
		$ovv=$row['overs'];
		$b1nn=$row['bts1nm'];
		$b2nn=$row['bts2nm'];
		$blnn=$row['blnm'];
		$runn=$row['runs'];
		$wkk=$row['wickets'];
		$exx=$row['extra'];
		}
		
		echo '<h3>Second Inning</h4>';
	echo '<h1><b>'.$tmnm.'</b></h1>';
	echo '<h2><b>'.$scrr.'/'.$wkk.'</b></h2>';
	//echo 'Wicket : <b>'.$wkk.'</b><br>';
	echo '<b>('.$ovv.')</b><br><br>';
	echo 'Batsman 1 : <b>'.$b1nn.'</b><br>';
	echo 'Batsman 2 : <b>'.$b2nn.'</b><br>';
	echo 'Bowler : <b>'.$blnn.'</b><br><br>';
	echo '</div></div>';
	//echo '<br>';
	echo '<div class="card">
<div style="margin:25px">
<br>';

} 
else{
	echo '<h1>Team Yet To Bat</h1>';
}
	
	

	if($scr>$scrr){
		echo '<b>'.$btnmn.'</b> won the match!';
	}
	else if($scr<$scrr) {
		echo '<b>'.$btnmm.'</b> won the match!<br><br>';
	}
	else {
		echo 'Match Tied!';
	}
	//echo '<a href="userinfo.php">Back</a>';
mysqli_close($conn);
?>

</div></div>
</body>
</html>