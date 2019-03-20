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
	<title>Update Employee</title>
</head>
<style type="text/css">
	#update
	{
		text-align: center;
		margin-top: 100px;
		font-family: "Trebuchet MS";
	}
		#button {
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
	<hr><h2 align="center">Update Employee Details</h2><hr>
	<div id="update">
		<form id="upd" method="POST" action="emp_update.php">
			Enter employee ID:<br>
			<input type="text" id="idtext" name="idtext"><br><br>
			<input type="submit" id="button" name="submit" value="Submit"><br><br>
		</form>
		<form id="show" method="POST" action="emp_update.php">
			Enter new Job Designation:<br>
			<input type="text" name="designation"><br><br>
			Enter new Salary:<br>
			<input type="text" name="salary"><br><br>
			Enter new Address:<br>
			<input type="text" name="address"><br><br>
			<input type="submit" name="Submit" id="button" value="Submit">
		</form>
		<form action="main.php">
			<input type="submit" id="button" name="submit" value="Back"><br><br>
		</form>
	</div>
</div>
</body>

<script type="text/javascript">
	jQuery("#show").hide();
	jQuery("#button").click(function(event) {
		event.preventDefault();
		jQuery("#show").show();

		var onvar=$("input#idtext").val();
  	var dataString='idtext='+ onvar;
  	 $.ajax({
    type: "POST",
    url: "updateform.php",
    data: dataString,
	});
  	 console.log(onvar);
	});
	
</script>

</html>
<?php
error_reporting(0);
$a=$_POST['idtext'];
file_put_contents("file.txt", $a);
?>