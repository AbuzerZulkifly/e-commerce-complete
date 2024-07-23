<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'oneclick';

$conn = mysqli_connect($hostname, $username, $password, $database);

if($conn){
}
else{
  die(mysqli_error($conn));
}

?>