<?php
	
	// Turn off error reporting
    //error_reporting(1);
    
    
	//web API path
	//eg http://domain.com/API/
	$API_path="http://domain.com/API/";
	
	//this is firebase server key to send push notications
	
	// check how you can get firebase server key  https://i.gyazo.com/7c3f23a30c14d3008533605a9821f944.png
	define("firebase_key","AAAA4Jks_Bo:XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-2GnamlEuySgVQr6y4ARIsjwQ0L2u-u_fS0tslun4TvCdhYACqzTsWNnHOelOaJTAPXM6IgPjIgm1qZl-r4jN5m-ERL1fwF2cQYvCU8wS2j");
    
    
	
	//database configration
	$servername = "localhost";
	$database = "database name";
	$username = "database username";
	$password = "W,kkM,p}+qwL";
    
	// Create connection

	$conn = mysqli_connect($servername, $username, $password, $database);
	mysqli_query($conn,"SET SESSION sql_mode = 'NO_ENGINE_SUBSTITUTION'");
	
	// Check connection

	if (!$conn) {

	    die("Connection failed: " . mysqli_connect_error());

	}
    
	
?>