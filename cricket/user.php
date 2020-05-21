<?php
$con=mysqli_connect("localhost","root","","dbms");
if(!$con)
{
	die("Connection Failed : ".mysqli_connect_error());
}
$user=$_POST['user'];
$sql="select * from user where userid='$user'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		if($_POST['user']==$row['userid'])
		{
			if($_POST['pass']==$row['password'])
			{
				$ret="insert into loggedin(user_id) value('$user');";
				if(mysqli_query($con, $ret))
				{
					echo "new record inserted";
				}
				else
					echo "not inserted";
				
				header('Location: userinfo.php');
			}
			else
			{
				header('Location: User.html');
				echo "Username is correct but password is incorrect";
			}
		}
		else
		{
			header('Location: User.html');
			echo "Wrong Username and password";
		}
	}
}
mysqli_close($con);
?>