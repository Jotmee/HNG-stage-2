<!DOCTYPE html>
<html>
<head>
	<title>HNG Internship 4</title>
	<style type="text/css">
		body, html {
	height: 100%;
}

.bg {
	background-image: url("1.jpg");
	height:100%;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
}
.centered{
	position: absolute;
	top: 50%;
	left:50%;
	color: white;
	transform: 
	translate(-50%, -50%);
}
	</style>
</head>
<body>
<div class="bg">
	<div class="centered">
		
	<h1  style="font-size: 300%; font-family: sans-serif;"> Hello HNG</h1>
	<h4 style="font-size: 150%; font-family: ">The date is :
		<?php 
			$date = date('j-F-Y');
			echo $date;?>
	</h4>
	<h4 style="font-size: 150%;"> The time is <?php 
			$time = date('g:i:s');
			echo $time; ?></div>
	</h4>
	</div>

</body>
</html>