<?php
require('../config.php');

//insert one off events - 
	//Joel
		//Diaper
		//Nursed
		//Bath
		//Solids
	//Copper
		//Poop
		//Pee

if(isset($_GET["type"])){
	$type = $_GET["type"];
}
echo $type;
if($type){

	$checkQuery = "SELECT count(*) as count from stewart_events WHERE stop = '0000-00-00 00:00:00' and type='$type'";

	$checkQueryResults = mysqli_query($con,$checkQuery);

	$row = mysqli_fetch_assoc($checkQueryResults);
	
	//echo $row['count'];

	if($row['count']==1 && ($type=="nap" || $type=="exercise")){
		$updateQuery = "UPDATE stewart_events set stop = now(),timeLength = timestampdiff(MINUTE, start, now()) WHERE stop = '0000-00-00 00:00:00' and type='$type'";
		mysqli_query($con,$updateQuery);

		
	}elseif($type=="nap" || $type=="exercise"){
		$insertQuery = "INSERT INTO stewart_events (type,start) VALUES ('$type',now())";
		mysqli_query($con,$insertQuery);
		
	}else{
		$insertQuery = "INSERT INTO stewart_events (type,start,stop) VALUES ('$type',now(),now())";
		mysqli_query($con,$insertQuery);
	}
}


?>