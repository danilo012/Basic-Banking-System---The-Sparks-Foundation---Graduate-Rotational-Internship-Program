<?php

	$servername = "dpg-cl5iaqk72pts73emhn70-a";
	$username = "jk_bank_user";
	$password = "8THqHeF12hlxhRznB7TOPtmfS3VuVjC4";
	$dbname = "jk_bank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}
