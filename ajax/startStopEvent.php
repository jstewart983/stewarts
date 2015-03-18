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
if($type){

	$checkQuery = "SELECT count(*) from stewart_events WHERE stop = '' and type='$type'";

	$checkQueryResults = mysqli_query($con,$checkQuery);

	$row = mysqli_fetch_assoc($checkQueryResults);
	if($row<1){
		$updateQuery = "UPDATE stewart_events set stop = timestamp,timeLength = TIMESTAMPDIFF(MINUTE, timestamp, start)";
		$update = mysqli_query($con,$update);
	}else{
		$insertQuery = "INSERT INTO stewart_events (type,start) VALUES ($type,timestamp)";
		$insert = mysqli_query($con,$insert);
	}
}

?>