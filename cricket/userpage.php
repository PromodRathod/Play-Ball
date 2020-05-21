<html>
<head>
<title>User Info</title>
</title>
</head>
<body>


<?php
$conn = mysqli_connect("localhost","root","","dbms");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$uid = $_POST['ui'];
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

<table border=double>
<tr> 
	<th>User Id </th> 
	<th>Name </th> 
	<th>Age </th> 
	<th>Sex </th> 
	<th>State </th> 
	<th>Country </th> 
	<th>Phone no</th> 
	<th>Address </th> 
	<th>Batting </th> 
	<th>Bolwing </th> 
	</tr>';
	
 echo '<tr>';
 echo '<td>'.$uid.'</td>';
  echo '<td>'.$nm.'</td>';
 echo '<td>'.$age.'</td>';
 echo '<td>'.$sex.'</td>';
  echo '<td>'.$sat.'</td>';
   echo '<td>'.$cty.'</td>';
    echo '<td>'.$pno.'</td>';
	 echo '<td>'.$ads.'</td>';
      echo '<td>'.$btstyle.'</td>';
	   echo '<td>'.$blstyle.'</td>';
echo 
'</tr>';




	echo '</table>';
		echo '<a href="userinfo.html">Back</a>';

	
mysqli_close($conn);
?>
			</body>
</html>			
	
