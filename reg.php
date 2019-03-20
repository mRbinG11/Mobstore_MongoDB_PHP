<!doctype html>
<html>
<head>
	<title>REGISTER</title>
	<link rel="stylesheet" type="text/css"/>
</head>
<style type="text/css">
body
{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
	background: url(reg.jpg) no-repeat;
	background-size: 1550px;
}
.box
{
	position: absolute;
	bottom :50%;
	right: 5%;
	transform: translate(-50%,50%);	
	width: 400px;
	height: 400px;
	padding: 50px;
	background-color:black;
	box-sizing: border-box;
	box-shadow: 0 15px 25px rgba(0,0,0,.5);
	border-radius:20px;
	opacity: 0.7;
}
.box h2
{
	margin: 0 0 30px;
	padding: 0;
	color:red;
	text-align:center;
	font-family: "Trebuchet MS";
}
.box .inputbox
{
	position: relative;
}
.box .inputbox input
{
	width: 100%
	padding:10px 0;
	font-size: 20px;
	color: white;
	margin-bottom: 30px;
	border: none;
	border-bottom: 1px solid #fff;
	outline: none;
	background: transparent;
}
.box .inputbox label
{
	position: absolute;
	top: 0;
	left: 0;
	padding: 0px 0;
	font-size: 20px;
	letter-spacing: 5px;
	color:#fff;
	pointer-events: none;
	transition: .5s;
	font-family: "Trebuchet MS";
}
.box .inputbox input:focus ~ label,
.box .inputbox input:valid ~ label
{
	top: -15px;
	left: 0;
	color:#03a9f4;
	font-size: 16px;
	letter-spacing: 3px;
}
.box input[type="submit"]
{
	background: transparent;
	border: none;
	outline: none;
	color: #fff;
	background: #f44141;
	padding: 16px 20px;
	cursor: pointer;
	border-radius:10px; 
	font-family: "Trebuchet MS";
}
.box .submit
{
 	text-align:center;
}
.box .submit p
{
	color:white;
	font-size: 22px;
}
</style>
<body>
	<div class="box">
		<h2>Register</h2>
		<form action="reg_ister.php" method="GET">
			<div class="inputbox">
				<input type="text" name="name" required>
				<LABEL>NAME</LABEL>
			</div>
			<div class="inputbox">
				<input type="text" name="usr" required>
				<LABEL>USERNAME</LABEL>
			</div>
			<div class="inputbox">
				<input type="password" name="pwd" required>
				<LABEL>PASSWORD</LABEL>
			</div>
			<div class="submit">
			<input type="submit" name="" value="REGISTER" >
			</div>
		</form>
		
	</div>

</body>
</html>