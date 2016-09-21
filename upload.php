<?php 

	var_dump($_FILES);

if(isset($_FILES['upload']))
{	
	$uploderfoler = "./upload/";
	$filename = $_FILES['upload']['name']; // koala.jpg
	$tmp_name = $_FILES['upload']['tmp_name']; // 

	$info =pathinfo($filename);
	$basename =$info['filename'];//koala
	$extension = $info['extension'];//jpg


	$savepath = $uploderfoler . $filename;//./upload/koala.jpg
	$i=0;
	while(file_exists($savepath)) // Y Y
	{
		$i++; // 1 2
		$savepath = "$uploderfoler$basename$i.$extension"; 
		//./upload/koala1.jpg
		//./upload/koala2.jpg

	}

	move_uploaded_file($tmp_name,$savepath );
	
 }
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>File Upload</title>
</head>
<body>

<form method="POST" enctype="multipart/form-data"   >
	
	<input type="file" name="upload">


	<input type="submit" name="" value="upload">

</form>


</body>
</html>