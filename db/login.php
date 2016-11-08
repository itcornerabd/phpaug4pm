<?php  require('constr.php');

 ?>
<?php 
	
	if(isset($_POST['username']))
	{

		$username= str_replace("'", "''", $_POST['username']);
		$password= str_replace("'", "''", $_POST['password']);


		$username = mysqli_escape_string($con,$username);
		$password = mysqli_escape_string($con,$password);
		//pdo 


		$query = "select * from login where username ='$username' and password = '$password' ";

		$rows = mysqli_query($con,$query);

		if(!$rows)
		{
			die("error in selection ");
		}

		if($rs=mysqli_fetch_array($rows))
		{
			$_SESSION['userid']=$rs['id'];
			$_SESSION['username']=$username;
			header("location:table.php");
			echo "correct credintials";
		}
		else
		{
			echo "invalid username and password";
		}
	}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Movies List </title>
</head>
<body>
<center>
		<form method="POST">
			<table width="400px">
				<tr>
					<td>Username</td>
					<td>
						<input type="text" name="username">
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td>
						<input type="password" name="password">
					</td>	
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="" value="login">
					</td>
				</tr>
			</table>

		</form>
</center>

</body>
</html>
<?php require('closestr.php'); ?>
