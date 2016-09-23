<?php
#$page= str_replace('/cloudnotes/','',$_SERVER['REQUEST_URI']);
$page= explode('/',$_SERVER['REQUEST_URI']);
$page=end($page);
$servername = "127.0.0.1";
$username = "b15_18636880";
$password = "643j879n";
$dbname = "cloudnotes";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?> 

