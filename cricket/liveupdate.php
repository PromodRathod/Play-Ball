<html>
<head>
<title>Teams played for</title>
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

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
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
<body style="font-family:'Proxima Nova Soft', 'Helvetica Neue', sans-serif" background="icc.jpg">



<div style="background-color: #000000; color:white; margin-left:140px; opacity:0.8; padding:10px; font-family: 'Proxima Nova Soft', 'Helvetica Neue', sans-serif;">
<h2>Current Scorecard</h2>
</div>

<div class="card">
<div style="margin:25px">
<br>


<?php
$conn = mysqli_connect("localhost","root","","dbms");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$mt=$_POST['mtid'];
$one="1";
$b=$mt.$one;
$sel = "select scorecard,overs,bts1nm,bts2nm,blnm from $b"; 
$result = mysqli_query($conn,$sel);
while($row = mysqli_fetch_assoc($result)) {
	$src=$row['scorecard'];
	$over=$row['overs'];
	$at1=$row['bts1nm'];
	$at2=$row['bts2nm'];
	$ol=$row['blnm'];
}

$wick="select sum(wickets) from $b";
$result1 = mysqli_query($conn,$wick);
$rows = mysqli_fetch_assoc($result1);
	$wic=$rows['sum(wickets)'];

echo '<table id="table1" align="center" style="width:90%; border-spacing:10px; border-collapse:collapse;">

<tr>
<th><br>Scorecard<br><br></th>
<th>Wickets<br></th>
<th>Overs Completed<br></th>
<th>Batsman On Strike<br></th>
<th>Non-Strike<br></th>
<th>Bowler<br></th>
</	tr>';
	echo '<tr>';
	echo '<td><br>'.$src.'</td>';
	echo '<td><br>'.$wic.'</td>';
	echo '<td><br>'.$over.'</td>';
	echo '<td><br>'.$at1.'</td>';
	echo '<td><br>'.$at2.'</td>';
	echo '<td><br>'.$ol.'</td>';
	echo '</tr>';
	echo '</table><br><br>';
	echo '<a href="scoreupdate.html"><button type="submit">Score Update</button></a>';
	mysqli_close($conn);
?>

<br><br>
</div></div>
</body>
</html>