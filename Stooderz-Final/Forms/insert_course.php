<?php 

session_start();
require '../connection.php';
$userEmail=$_SESSION['user'];


$sql="SELECT * FROM `teacher` WHERE `email`='$userEmail'";


$result=mysqli_fetch_array(mysqli_query($connection,$sql),MYSQLI_BOTH);

$userTeacher=$result['user_teacher'];

if(isset($_POST['Submit']) and isset($_POST['course'])and isset($_POST['description'])and isset($_POST['price'])){
$courseTitle = $_POST['course'];
$description = $_POST['description'];
$fees = $_POST['price'];

//$sql="INSERT INTO `course`(`course_title`,`user_teacher`,`description`,`fees`) VALUES ('$courseTitle','$userTeacher','$description','$fees')";
	echo $sql="CALL insertCourse('$courseTitle','$userTeacher','$description','$fees')";
if (mysqli_query($connection,$sql)){
	echo 'Data Inserted in Course';
	header('location:../Home.php');
	}else{
	echo 'Data Not Inserted in Course';
	}

}else{
	echo "variables not set";
}

?> 