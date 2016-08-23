<?php
	
	
	//local server
	/*
	$dbhost = 'LAQUI\SQLEXPRESS';
	$dbname = 'DBAppointment';  
	$dbuser = 'vlilocalsql';                  
	$dbpass = 'mAsterkkl082695';  
	
*/

	//windows azure
	$dbhost = 'haremcloud.database.windows.net';
	$dbname = 'DBAppointment';  
	$dbuser = 'rod';                  
	$dbpass = '1bengzaba@vli';  
	/*
	$dbhost = 'appointmentsrv.database.windows.net';
	$dbname = 'DBAppointment';  
	$dbuser = 'kennethlaqui';                  
	$dbpass = 'mAsterkkl082695';
*/
	try
	{
		$dbcon = new PDO("sqlsrv:Server={$dbhost};Database={$dbname}",$dbuser,$dbpass);
		
	} catch (PDOException $e) {
    echo "Failed to get DB handle: " . $e->getMessage() . "\n";
    exit;
	
	}

	

?>