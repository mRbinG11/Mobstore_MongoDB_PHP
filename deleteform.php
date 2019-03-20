<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="http://malsup.github.com/jquery.form.js"></script> 
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Remove Employee</title>
</head>
<style type="text/css">
	#delete
	{
		text-align: center;
		margin-top: 100px;
		font-family: "Trebuchet MS";
	}
	#button 
	{
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 10px 22px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
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
	<hr><h2 align="center">Delete Employee Details</h2><hr>
	<div id="delete">
		<form id="del" action="emp_delete.php" method="GET"><br>
			Enter employee ID:<br>
			<input type="text" name="delete_id"><br><br>
			<input type="submit" id="button" name="submit" id="button" value="Submit"><br><br>
		</form>
		<form action="main.php">
			<input type="submit" id="button" name="submit" value="Back"><br><br>
		</form>
	</div>
</div>
</body>
</html>