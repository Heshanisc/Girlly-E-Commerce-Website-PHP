<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'Girlyy';

//create Database connection 
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

//if the Database connection failed, display an error message 
if (!$conn)
{
 die('Could not connect to the database: ' . mysqli_error($conn));
}

mysqli_select_db($conn, $dbname);
?>