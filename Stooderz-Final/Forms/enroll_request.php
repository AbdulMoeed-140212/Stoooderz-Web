<?php 
session_start();
require '../connection.php';
$userEmail=$_SESSION['user'];

@$courseID=(integer)$_POST['courseID'];
@$temail=$_POST['temail'];

$sql="SELECT `user_student`  FROM  `student` WHERE email='$userEmail' ";

$result=mysqli_fetch_array(mysqli_query($connection,$sql),MYSQLI_BOTH);
$studentID=$result['user_student'];
//if (isset($_POST['enroll'])){

	$sql="INSERT INTO `request`(`courseid`,`user_student`) VALUES ('$courseID','$studentID')";
	if($result=mysqli_query($connection,$sql)){
		echo "query success";
		
	}else
		echo "query fail ".mysqli_error($connection);
//}/**/


?>