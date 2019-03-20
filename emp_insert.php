	<?php
	require 'vendor/autoload.php';
	/*To insert a document in a collection*/
	$mclient = new MongoDB\Client;
	$msdb = $mclient->mobstore;
	$empcollection = $msdb->emp;
	$countinit=$empcollection->count();
	$id = $_GET['_id'];
	$name = $_GET['name'];
	$dob = $_GET['dob'];
	$doj = $_GET['doj'];
	$designation = $_GET['designation'];
	$salary = $_GET['salary'];
	$contact = $_GET['contact'];
	$address = $_GET['address'];
	try
	{	$insertOneResult = $empcollection->insertOne(['_id' => $id,'name' => $name,'dob' => $dob,'doj'=> $doj,'designation' => $designation,'salary' => $salary,'contact' => $contact,'address' => $address]);
		$countfin=$empcollection->count();
    	if($countfin>$countinit)
    	{
      		echo '<script type="text/javascript">'; 
	  		echo 'alert("Inserted Successfully!");'; 
	  		echo 'window.location.href = "emp_query.php";';
	  		echo '</script>';
		}
	}	
	catch(Exception $e)
	{
		echo '<script type="text/javascript">'; 
		echo 'alert("Could not Insert, duplicate Id!");'; 
		echo '</script>';
	}
?>