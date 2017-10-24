<?php 
require "helper/form.php";
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<style type="text/css">
	body {
		padding-top: 5rem;
	}
	.starter-template {
		padding: 3rem 1.5rem;
		text-align: center;
	}
</style>
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarsExampleDefault">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
			</ul>

		</div>
	</nav>
	<main role="main" class="container">

		<div class="starter-template">
			<h1>Twitter Bootstrap PHP Helper Library</h1>
			<p class="lead"> Twitter Bootstrap form element generator</p>
			<p class="lead"> By Amine L'ch</p>
		</div>

	</main><!-- /.container -->
	<div class="row">
		<div class="col-md6">
			<form>		
				<?php 
				$arr=[ 
					"name" 		=>"inp1",
					"class" 	=>"form-group",
					"id"		=> "txtarea",
					"col" 		=>"2"

				];
				echo '<label for ="in1">fdf';
				echo Form::input(["class"=>"form-group","id"=>"in1"],"Hello word");
				echo '</label>';
				echo Form::textarea($arr,"Hello word"); 

				?>

			</div>
		</div>
	</div>
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>