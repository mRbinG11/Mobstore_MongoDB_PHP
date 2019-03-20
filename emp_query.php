<?php
	require 'vendor/autoload.php';
	/*To display the data from the collection*/
	$mclient = new MongoDB\Client;
	$msdb = $mclient->mobstore;
	$empcollection = $msdb->emp;
	$list = $empcollection->find();
    echo 
    "<html>
    <style> 
    body
    {
        background-image: url('img2.jpg');
        background-position: center;
        background-size: 2000px;
        background-repeat: no-repeat;    
    }
    h2
    {
        color:yellow;
    }
    </style>
    <hr><h2 align='center'>Existing Employee Records</h2><hr>
    </html>";
	$emp_details  = "<table style='border:1px solid red; margin-left:200px; margin-top:80px; align='center'";
    $emp_details .= "border-collapse:collapse' border='1px'>";
    $emp_details .= "<thead>";
    $emp_details .= "<tr>";
    $emp_details .= "<th bgcolor='orange'>EID</th>";
    $emp_details .= "<th bgcolor='orange'>NAME</th>";
    $emp_details .= "<th bgcolor='orange'>DOB</th>";
    $emp_details .= "<th bgcolor='orange'>DOJ</th>";
    $emp_details .= "<th bgcolor='orange'>DESIGNATION</th>";
    $emp_details .= "<th bgcolor='orange'>SALARY</th>";
    $emp_details .= "<th bgcolor='orange'>CONTACT NO.</th>";
    $emp_details .= "<th bgcolor='orange'>ADDRESS</th>";
    $emp_details .= "</tr>";
    $emp_details .= "</thead>";
    $emp_details .= "<tbody>";
	foreach ($list as $item) 
	{
		$emp_details .= "<tr>";
        $emp_details .= "<td bgcolor='orange'>" . $item["_id"] . "</td>";
        $emp_details .= "<td bgcolor='orange'>" . $item["name"]."</td>";
        $emp_details .= "<td bgcolor='orange'>" . $item["dob"]."</td>";
        $emp_details .= "<td bgcolor='orange'>" . $item["doj"]."</td>";
        $emp_details .= "<td bgcolor='orange'>" . $item["designation"]."</td>";
        $emp_details .= "<td bgcolor='orange'>" . $item["salary"]."</td>";
        $emp_details .= "<td bgcolor='orange'>" . $item["contact"]."</td>";
        $emp_details .= "<td bgcolor='orange'>" . $item["address"]."</td>";
        $emp_details .= "</tr>";
	}
	$emp_details .= "</tbody>";
    $emp_details .= "</table>";
    echo $emp_details;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Employees</title>
</head>
    <style type="text/css">
        button{
            color: black;
            background: green;
            padding: 10px;
            margin-left: 1000px;
        }
    </style>
<body>

<form action="main.php"><br>
        <button type="submit"  value="delete">BACK</button>
    </form>
</body>
</html>