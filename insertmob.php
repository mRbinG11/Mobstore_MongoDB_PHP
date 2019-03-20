<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<title>Add a Mobile</title>
</head>
<style type="text/css">
	#insert
	{
		text-align: center;
		margin-top: 100px;
		font-family: "Trebuchet MS";
	}
	body
	{
		background-image: url("img2.jpg");
		background-position: center;
		background-size: 2000px;
		background-repeat: no-repeat;
	}
	#col
	{
		color: yellow;
		font-family: "Trebuchet MS";
	}
</style>
<body>
	<div id="col">
	<hr><h1 align="center">Add a Mobile</h1><hr>
	<div id="insert">
	<p>Fill in the following details</p>
		<form action="mob_insert.php" method="GET" id="insertform">
			Model ID:<br>
			<input type="text" name="id" required><br><br>
			Company Name:<br>
			<input type="text" name="company" required><br><br>
			Mobile Name:<br>
			<input type="text" name="model_name" required><br><br>
			Price:<br>
			<input type="text" name="price" required><br><br>
			Stock:<br>
			<input type="text" name="stock" required><br><br>
		    <button type="submit" form="insertform" class="btn btn-success" value="Submit">Submit</button>
		    </form>
			<form action="main.php">
			<input type="submit" id="button" name="submit" value="Back"><br><br>
			</form>
		</div>
</div>
</body>
</html>