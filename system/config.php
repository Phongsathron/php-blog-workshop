<?php
$host = "161.246.34.192";
$username = "blog";
$password = "secret";
$database = "blog";

$conn = mysqli_connect($host,$username,$password,$database);
if(!$conn){
	die(mysqli_error($conn));
}

mysqli_query($conn,"SET character_set_results=utf8");
mysqli_query($conn,"SET character_set_client=utf8");
mysqli_query($conn,"SET character_set_connection=utf8");

?>