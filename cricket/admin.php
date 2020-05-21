<?php
$con=mysqli_connect("localhost","root","","dbms");
if(!$con)
{
	die("Connection Failed : ".mysqli_connect_error());
}
$user=$_POST['user'];
$sql="select * from admin where username='$user'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		if($_POST['user']==$row['username'])
		{
			if($_POST['pass']==$row['password'])
			{
				header('Location: AdminInfo.html');
				echo "Username and Password are correct";
			}
			else
			{
				header('Location: AdminLogin.html');
				echo "Username is correct but password is incorrect";
			}
		}
		else
		{
			header('Location: AdminLogin.html');
			echo "Wrong Username and password";
		}
	}
}
mysqli_close($con);
?>