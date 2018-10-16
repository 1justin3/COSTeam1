<?php
//Initialize the session
    session_start();
    if(!isset($_SESSION['Result'])){
        $_SESSION['Result'] = "";
    }
//MySQL values for network location, username, password and database name.
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'costeam');
define('DB_PASSWORD', 'password');
define('DB_DATABASE', 'test');

//Defines the database connection as $db
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>