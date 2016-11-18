<!DOCTYPE html>
<html>
<head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>
			Bootstrap Demo
	</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.theme.min.css">
	<style type="text/css">
		.cls
		{
			background-color: yellow;
			border:1px solid black;
			border-collapse: collapse;
			margin-top: 10px;
			margin-bottom:10px;

		}	

	</style>
</head>
<body>
<div class="container">
<div class="row">
		<div class="cls col-md-4 col-sm-6 col-lg-2"> book 1</div>
		<div class="cls col-md-4 col-sm-6 col-lg-2"> book 2</div>
		<div class="cls col-md-4 col-sm-6 col-lg-2"> book 3</div>		
		<div class="cls col-md-4 col-sm-6 col-lg-2"> book 4</div>
		<div class="cls col-md-4 col-sm-6 col-lg-2"> book 5</div>
		<div class="cls col-md-4 col-sm-6 col-lg-2"> book 6</div>
		<div class="cls col-md-4 col-sm-6 col-lg-2"> book 7</div>
		<div class="cls col-md-4 col-sm-6 col-lg-2"> book 8</div>
</div>

<div class="row">
		<div class="cls col-md-4 col-sm-6 col-lg-2"> book 1</div>
		<div class="cls col-md-4 col-sm-6 col-lg-2"> book 2</div>
		<div class="cls col-md-4 col-sm-6 col-lg-2"> book 3</div>		
		<div class="cls col-md-4 col-sm-6 col-lg-2"> book 4</div>
		<div class="cls col-md-4 col-sm-6 col-lg-2"> book 5</div>
		<div class="cls col-md-4 col-sm-6 col-lg-2"> book 6</div>
		<div class="cls col-md-4 col-sm-6 col-lg-2"> book 7</div>
		<div class="cls col-md-4 col-sm-6 col-lg-2"> book 8</div>
</div>
</div>

<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<button class="btn btn-primary" id="openmodal">open modal</button>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        
      	<input id="txt1" type="text" class="form-control" name="">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="save">Save changes</button>
      </div>
    </div>
  </div>
</div>




</body>
</html>
<script type="text/javascript" src="./js/jquery.js"></script>
<script type="text/javascript" src="./js/bootstrap.min.js"></script>

<script type="text/javascript">
	$("#openmodal").click(function(){
		//code

		$("#myModal").modal('show');

	})
	$("#save").click(function(){


		if($("#txt1").val()!="")
		{
			$("#myModal").modal('hide');
		}	

	})
</script>


