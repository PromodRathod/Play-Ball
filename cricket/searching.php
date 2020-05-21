<html>
<head>
<title>Team and Player Details</title>
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


</style>
</style>
<body style="font-family:'Proxima Nova Soft', 'Helvetica Neue', sans-serif" background="icc.jpg">

<div id="mySidenav" class="sidenav">
  <a href="userinfo.php" id="back">Back</a>
</div>


<!--<div style="background-color: #000000; color:white; margin-left:140px; opacity:0.8; padding:10px; font-family: 'Proxima Nova Soft', 'Helvetica Neue', sans-serif;">
<h2>Teams Played For</h2>
</div>!-->




<?php
$conn = mysqli_connect("localhost","root","","dbms");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$tid=$_POST['search'];
	$ssq = "select p.team_id,t.team_name,p.player_id, u.Name from team t, team1 p, user_info u where t.team_id='$tid' and t.team_id=p.team_id and u.user_id=p.player_id";
$result=mysqli_query($conn,$ssq);
$res=mysqli_query($conn, $ssq);
if(mysqli_num_rows($result)>0)
{
	
	if($row=mysqli_fetch_assoc($result)) {
		
		$nm=$row['team_name'];
		$tid=$row['team_id'];
	}
	
	echo '<div style="background-color: #000000; color:white; margin-left:140px; opacity:0.8; padding:10px; font-family: "Proxima Nova Soft", "Helvetica Neue", sans-serif;">
	<h2>Team: '.$nm.'</h2>
	<h2>TeamID: '.$tid.'</h2>
	</div>
	
	<br>';

	echo '<div class="card">
<div style="margin:25px">
<br>';
	echo '<table id="table1" align="center" style="width:90%; border-spacing:10px; border-collapse:collapse;">
	<tr> 
   <th><br>Player Name<br><br></th>
   <th>PlayerID<br></th>
 </tr>';


		while($row=mysqli_fetch_assoc($res)) {
		$uid=$row['player_id'];
		$pnm=$row['Name'];
		echo '<tr>';
		echo '<td><br>'.$pnm.'</td>';
		echo '<td><br>'.$uid.'</td>';
		echo '</tr>';
		echo '<br>';
		}
		echo '</table>';
		echo '<br>';
}
//echo '<a href="userinfo.php">Back</a>';
mysqli_close($conn);
?>

