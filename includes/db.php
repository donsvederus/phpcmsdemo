<?php

// this is set
// setting up the values in an array 
// ex. $db['db_host'] = "localhost";
include "dbconfig.php";


// Using a more secure way to connect to the db
// using a foreach loop to convert the db values to uppercase
foreach($db as $key => $value){
define(strtoupper($key), $value);
}


$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if($connection){
    echo "we are connected";
} else {
    echo " we are not connecting";
}


?>