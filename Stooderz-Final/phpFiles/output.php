<?php
session_start();

//include 'test.php';
include'connection.php';
include_once 'utlities.php';


if(loggedIn()){

    echo '<script type="text/javascript">alert("1 Logged In"); </script>';
    //header('location: Home.php');
    include 'navbar2.html';
}else{
	//include 'navbar.html';
    //header('location: Home.php');
    echo '<script type="text/javascript">alert("1 Log In Error "); </script>';
}

//echo $_SESSION['user'];
//echo $row;

 ?>