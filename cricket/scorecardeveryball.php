<html>
<head>
<title>Ball by Ball Score</title>
<style>

table#table1 th {
background-color: black;
color: white;
}

table#table1 tr:nth-child(even) {
background-color: #eee;
}

table#table1 tr:nth-child(odd) {
background-color: #fff;
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


</style>
</head>

<body style="font-family:'Proxima Nova Soft', 'Helvetica Neue', sans-serif" background="icc.jpg">


<div id="mySidenav" class="sidenav">
  <a href="livesc.html" id="back">Back</a>
</div>







<?php
$conn = mysqli_connect("localhost","root","","dbms");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$mtid=$_POST['mtid'];
//$uid=$_POST['uid'];
$one="1";
$two="2";
$mt=$mtid.$one;
$mtt=$mtid.$two;
$ssq = "select * from $mtid";
$result= mysqli_query($conn,$ssq);
if(mysqli_num_rows($result)>0)
{
		$row=mysqli_fetch_assoc($result);
		$btnmn=$row['batting_team'];
}

$ssq1 = "select * from $mtid";
$resul= mysqli_query($conn,$ssq1);
if(mysqli_num_rows($resul)>0)
{
  
while($ro=mysqli_fetch_assoc($resul)) {
		$btnmm=$ro['batting_team'];
		}
		$newbt=$btnmm;
}
echo '<br><br>';
echo '<div style="background-color: #000000; margin-left:140px; color:white; opacity:0.8; padding:10px; font-family: \'Proxima Nova Soft', 'Helvetica Neue\', sans-serif;">';

echo 'First Inning<br>';
echo 'Team Name : '.$btnmn.'<br>';
echo '</div>';
echo '<br>';
echo '<table id="table1" align="center" style="width:90%; border-spacing:10px; border-collapse:collapse;">

<tr>
<th><br>Scorecard<br><br></th>
<th>Wickets<br></th>
<th>Overs Completed<br></th>
<th>Batsman On Strike<br></th>
<th>Non-Strike<br></th>
<th>Bowler<br></th>
</	tr>';

$ssq = "select * from $mt";
$resultt=mysqli_query($conn,$ssq);
if(mysqli_num_rows($resultt)>0)
{
		while($rows=mysqli_fetch_assoc($resultt)) {
		$scr=$rows['scorecard'];
		$ov=$rows['overs'];
		$b1n=$rows['bts1nm'];
		$b2n=$rows['bts2nm'];
		$bln=$rows['blnm'];
		$run=$rows['runs'];
		$wk=$rows['wickets'];
		$ex=$rows['extra'];
		
		
		
	echo '<tr><td><br>'.$scr.'</td>';
	echo '<td><br>'.$wk.'</td>';
	echo '<td><br>'.$ov.'</td>';
	echo '<td><br>'.$b1n.'</td>';
	echo '<td><br>'.$b2n.'</td>';
	echo '<td><br>'.$bln.'</td></tr>';
		}
		echo '</table>';
}
echo '<br><br>';
echo '<div style="background-color: #000000; margin-left:140px; color:white; opacity:0.8; padding:10px; font-family: \'Proxima Nova Soft', 'Helvetica Neue\', sans-serif;">';

echo 'Second Inning<br>';
	echo 'Team Name : '.$newbt.'<br></div><br>';
echo '<table id="table1" align="center" style="width:90%; border-spacing:10px; border-collapse:collapse;">

<tr>
<th><br>Scorecard<br><br></th>
<th>Wickets<br></th>
<th>Overs Completed<br></th>
<th>Batsman On Strike<br></th>
<th>Non-Strike<br></th>
<th>Bowler<br></th>
</	tr>';

	
$ssq = "select * from $mtt";

$result1=mysqli_query($conn,$ssq);
if(mysqli_num_rows($result1)>0)
{
		while($roww=mysqli_fetch_assoc($result1)) {
		$scrr=$roww['scorecard'];
		$ovv=$roww['overs'];
		$b1nn=$roww['bts1nm'];
		$b2nn=$roww['bts2nm'];
		$blnn=$roww['blnm'];
		$runn=$roww['runs'];
		$wkk=$roww['wickets'];
		$exx=$roww['extra'];
		
		
			echo '<tr><td><br>'.$scrr.'</td>';
	echo '<td><br>'.$wkk.'</td>';
	echo '<td><br>'.$ovv.'</td>';
	echo '<td><br>'.$b1nn.'</td>';
	echo '<td><br>'.$b2nn.'</td>';
	echo '<td><br>'.$blnn.'</td></tr>';
		}
		echo '</table>';

		
		
		}


	else 
	{   echo '<div style="background-color: #000000; margin-left:140px; color:white; opacity:0.8; padding:10px; font-family: \'Proxima Nova Soft', 'Helvetica Neue\', sans-serif;">';

		echo '<h4>Second Team Yet to Bat</h4></div><br>';
	}
	//echo '<a href="livesc.html">Back</a>';
mysqli_close($conn);
?>