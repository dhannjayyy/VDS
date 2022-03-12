<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'voyagedancestudio';

//create a connection
$conn = mysqli_connect($host,$user,$password,$db);

//Die if connection was not successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>