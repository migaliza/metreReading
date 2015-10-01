<?php
include("adb.php");
$obj =new adb();

	
	//$new_date = date('yy-mm-dd',strtotime($_POST['Date']));
	$reading=$_REQUEST['reading'];
	$captured = $_REQUEST['captured'];
	$date=$_REQUEST['date'];
	$location=$_REQUEST['location'];
	
	$str_query="INSERT INTO 'phoneGapMetre' (Reading,Captured,Date,Location) VALUES('$reading','$captured','$date','$location')";

	$obj->query($str_query) or  die(mysql_error());
	




?>
