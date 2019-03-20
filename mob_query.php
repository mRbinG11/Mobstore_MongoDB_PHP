<?php
	
	require 'vendor/autoload.php';
	/*To insert a document in a collection*/
	$mclient = new MongoDB\Client;
	$msdb = $mclient->mobstore;
	$mobcollection = $msdb->mob;
	$list = $mobcollection->find();

    echo "<html> <style>body
    {
        background-image: url('img2.jpg');
        background-position: center;
        background-size: 2000px;
        background-repeat: no-repeat;    }
      h2
    {
        color:yellow;
    }
    </style><hr><h2 align='center'>Existing Mobile Records</h2><hr> </html>";
	$mob_details  = "<table style='border:1px solid red; margin-left:400px; margin-top:80px;  align='center'";
    $mob_details .= "border-collapse:collapse' border='1px'>";
    $mob_details .= "<thead>";
    $mob_details .= "<tr>";
    $mob_details .= "<th bgcolor='orange'>MODEL NO</th>";
    $mob_details .= "<th bgcolor='orange'>COMPANY</th>";
    $mob_details .= "<th bgcolor='orange'>MODEL NAME</th>";
    $mob_details .= "<th bgcolor='orange'>PRICE</th>";
    $mob_details .= "<th bgcolor='orange'>STOCK</th>";
    $mob_details .= "</tr>";
    $mob_details .= "</thead>";
    $mob_details .= "<tbody>";
    
	foreach ($list as $item) 
	{
		$mob_details .= "<tr>";
        $mob_details .= "<td bgcolor='orange'>" . $item['_id'] . "</td>";
        $mob_details .= "<td bgcolor='orange'>" . $item['company']."</td>";
        $mob_details .= "<td bgcolor='orange'>" . $item['model_name']."</td>";
        $mob_details .= "<td bgcolor='orange'>" . $item['price']."</td>";
        $mob_details .= "<td bgcolor='orange'>" . $item['stock']."</td>";
        $mob_details .= "</tr>";
	}

	$mob_details .= "</tbody>";
    $mob_details .= "</table>";
    echo $mob_details;
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Available Mobiles</title>
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