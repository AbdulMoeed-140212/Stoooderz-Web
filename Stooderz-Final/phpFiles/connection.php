<?php 

$serverName="localhost";
$userName="root";
$passWord="asdf1234";
$dataBase="stooderz";


// create connection with the database
@$connection=mysqli_connect($serverName,$userName,$passWord,$dataBase);
if(!$connection){
	die("Connection error".mysqli_connect_error());
}else{
	// echo"Connection Successfull";
}



 ?>