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

	switch ($type) {
	    case "diaper":
	        //diaper query
	    $query = "INSERT INTO stewart_events (type,start) VALUES ($type,timestamp)";
	        break;
	    case "nursed":
	        //nursed query
	    $query = "INSERT INTO stewart_events (type,start) VALUES ($type,timestamp)";
	        break;
	    case "bath":
	        //bath query
	    $query = "INSERT INTO stewart_events (type,start) VALUES ($type,timestamp)";
	        break;
	    case "solids":
	        //solids query
	    $query = "INSERT INTO stewart_events (type,start) VALUES ($type,timestamp)";
	        break;
	    case "poop":
	    	//poop query
	    $query = "INSERT INTO stewart_events (type,start) VALUES ($type,timestamp)";
	    	break;
	    case "pee":
	    	//pee query
	    $query = "INSERT INTO stewart_events (type,start) VALUES ($type,timestamp)";
	    	break;
		}
}

?>


