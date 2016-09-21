<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>Action Page</h2>

	<?php 
		//$_REQUEST
		var_dump( $_GET);

		if(isset($_GET['id']))
			echo "id is ".$_GET['id'];
	 
		if(isset($_GET['name']))
			echo "<br> name is ".$_GET['name'];
	 
		var_dump($_POST);
		
		if(isset($_POST['txtname']))
			echo " <br>  name is ".$_POST['txtname'];	

		if(isset($_POST['txtpassword']))
			echo " <br>  password is ".$_POST['txtpassword'];	

		if(isset($_POST['txtaddress']))
			echo " <br>  address is ".$_POST['txtaddress'];	
		
		if(isset($_POST['selcity']))
			echo " <br>  city is ".$_POST['selcity'];

		if(isset($_POST['radgender']))
			echo " <br>  Gender  is ".$_POST['radgender'];	
	
		if(isset($_POST['chksport']))
			echo " <br> Hobby  is ".$_POST['chksport'];	

		if(isset($_POST['chkart']))
			echo " <br>  Hobby  is ".$_POST['chkart'];	

		if(isset($_POST['chkreading']))
			echo " <br>  Hobby  is ".$_POST['chkreading'];	

		if(isset($_POST['chkhobby']))
			{
				foreach ($_POST['chkhobby'] as $key => $value)
				 {
					echo  "<br> hobby is". $value;
				}
			}	
	 ?>


</body>
</html>