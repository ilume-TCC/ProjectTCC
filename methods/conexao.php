<?php
  
$user = 'root';
$pass = '';
$server = 'localhost';
$db = 'iLume';

$conn = mysqli_connect($server, $user, $pass, $db);
$conn->set_charset('utf8');

if ($conn->connect_error){
  die ('Connect Error');
}
?>