<!DOCTYPE html>
<html>
<head>
	<title>
		Slider Demo
	</title>
	
	<link href="./bxslider/jquery.bxslider.css" rel="stylesheet" />
	<script type="text/javascript" src="./js/jquery.min.1.8.2.js"></script>
	<script src="./bxslider/jquery.bxslider.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){

			$('.bxslider').bxSlider();

		})		
		
	</script>

</head>
<body>

<div style="width:512px;height:384px;">
<ul class="bxslider">
  <li><img src="./images/1.jpg" /></li>
  <li><img src="./images/2.jpg" /></li>
  <li><img src="./images/3.jpg" /></li>
  <li><img src="./images/4.jpg" /></li>
</ul>
</div>

</body>
</html>