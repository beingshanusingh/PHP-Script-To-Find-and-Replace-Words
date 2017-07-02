<?php
include ('function.php');
?>
<!doctype>
<html>
<head>
	<title>A Find And Replace Word PHP Application.</title>
	<!--Stylesheet-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://fonts.googleapis.com/css"></script>


</head>
<body style="background-image: url('images/background.jpeg');background-repeat: no-repeat;background-position:fixed;">
	<div class="container" >
					<div id='form_container'>
					 		<h1><strong>Find & Replace Word Converter PHP Script</strong></h1>
					 		<hr>
								<form action="index.php" method="POST" id='form'>
									<textarea  name="text" class="form-control" rows="3">Enter The Text Here.</textarea><br>
										<b>Search For:</b><br>
									<input type="text" class="form-control" name="search" value="Enter Old Word From Above"><br><br>
										<b>Replace with:</b><br>
									<input type="text" class="form-control" name="replace" value="Enter New Word To Replace"><br><br>
										
									<input type="submit" class="btn btn-danger btn-lg" value="Submit And Replace">

								</form>
					</div>
				<hr><br>
			<div class="jumbotron">
			
			 		<h3 id="text" style="font-family:Acme;"><?php FindReplace();?></h3>
			 		<footer><span class="glyphicon glyphicon-search" aria-hidden="true">Shanu Singh 2017</span></footer>
				 
			</div>
			
			<hr>

	</div>

</body>
</html>







