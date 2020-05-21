<html>
<head>
<title>User Home</title>


<style>

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin-right:20px;
  background-color: white; opacity: 0.9;
  text-align: left;
  font-family: 'Proxima Nova Soft', 'Helvetica Neue', sans-serif;
}

.card1 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 1500px;
 margin-left:600px;
 margin-right:600px;
  background-color: white; opacity: 0.8;
  text-align: center;
  font-family: 'Proxima Nova Soft', 'Helvetica Neue', sans-serif;
}

.card2 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 700px;
margin-left:120px;  
background-color: white; opacity: 0.9;
  text-align: left;
  font-family: 'Proxima Nova Soft', 'Helvetica Neue', sans-serif;
}

table#table1 td:nth-child(odd) {
background-color: #ccc;
}

table#table1 td:nth-child(even) {
background-color: #eee;
}


.title {
  color: grey;
  font-size: 22px;
}



.topnav .search-container {
  float: right;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) { }

  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
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

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

input[type=text], input[type=password] {
  width: 80%;
  padding: 15px;
  margin: 10px 10px 22px 0px;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}


.submit {
	width:80%;
}
  
  
</style>	
</head>
<body style="font-family:'Proxima Nova Soft', 'Helvetica Neue', sans-serif" background="icc.jpg">

<div style="background-color: #000000; margin-left:140px; color:white; opacity:0.8; padding:10px; font-family: 'Proxima Nova Soft', 'Helvetica Neue', sans-serif;">
<h2>User Home</h2>
</div>
<br>


<div class="card2" style="float:left;">
<div style="margin:25px">
<br>


<a href="teamplayedfor.php"><button>Teams Played For</button></a><br><br>
<a href="scorep.html"><button>Scorecard of Particular Match</button></a><br><br>
<a href="updatedetails.html"><button>Update User Details</button></a><br><br>
<a href="logoutuser.php"><button>Log Out</button></a><br><br>
<br>
</div></div>


<center class="card1" style="float:center;">
<br><br>
<div class="search-container">

    <form action="searching.php" method="post">
      <input type="text" placeholder="Search Team or Player" name="search">
      <button type="submit" class="submit">Search</button>
    </form>  
	<br>
	</div>
	</center>


<div class="card" style="float:right; margin-right:80px;">
<div style="margin:25px">
<br>

  <img src="pro.png" alt="User Profile Picture" style="width:100%">
<br><br>

<?php
$conn = mysqli_connect("localhost","root","","dbms");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$var="select * from loggedin";
$res=mysqli_query($conn, $var);

if(mysqli_num_rows($res)>0)
{
	$row=mysqli_fetch_assoc($res);
	

$uid = $row['user_id'];
}
$ssq = "select * from user_info where user_id='$uid'";
$result=mysqli_query($conn,$ssq);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$nm=$row['Name'];
		$age=$row['Age'];
		$sex=$row['Sex'];
		$sat=$row['State'];
		$cty=$row['Country'];
		$pno=$row['Phone_no'];
		$ads=$row['Address'];
	}
}
$ssq = "select * from user_info1 where user_id='$uid'";
$result=mysqli_query($conn,$ssq);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$btstyle=$row['batting'];
		$blstyle=$row['bowling'];
	}
}
echo '

<table id="table1" border-collapse=collapse align=center style="text-align:center;">';
 echo '<tr><td><br>User Id<br></td><td>'.$uid.'</td></tr>';
  echo '<tr><td><br>Name<br><br></td><td>'.$nm.'</td></tr>';
 echo '<tr><td><br>Age<br><br></td><td>'.$age.'</td></tr>';
 echo '<tr><td><br>Sex<br><br></td><td>'.$sex.'</td></tr>';
  echo '<tr><td><br>State<br><br></td><td>'.$sat.'</td></tr>';
   echo '<tr><td>Country</td><td>'.$cty.'</td></tr>';
    echo '<tr><td>Phone no</td><td>'.$pno.'</td></tr>';
	 echo '<tr><td>Address</td><td>'.$ads.'</td></tr>';
      echo '<tr><td>Batting</td><td>'.$btstyle.'</td></tr>';
	   echo '<tr><td>Bowling</td><td>'.$blstyle.'</td></tr>';




	echo '</table>';
		//echo '<a href="userinfo.html">Back</a>';

	//echo'<br><br>';
mysqli_close($conn);
?>

<br><br>
</div></div>

</body>
</html>