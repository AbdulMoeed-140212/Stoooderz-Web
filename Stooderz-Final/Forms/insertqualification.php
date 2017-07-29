<?php 
session_start();
require '../connection.php';

$userEmail= $_SESSION['user'];

	 
 if (isset($_POST['Submit']) and isset($_POST['institute']) and isset($_POST['level']) and isset($_POST['subject'])and isset($_POST['year'])) {
		$institute =mysqli_real_escape_string($connection, $_POST['institute']);
		$degreeLevel =mysqli_real_escape_string( $connection,$_POST['level']);
		$degreeTitle = mysqli_real_escape_string($connection,$_POST['subject']);
		$graduationYear = mysqli_real_escape_string($connection,$_POST['year']);

		$sql="SELECT `user_teacher` FROM `teacher` WHERE `email`='$userEmail'";
		$result=mysqli_fetch_array(mysqli_query($connection,$sql),MYSQLI_BOTH);
		$teacherID=$result['user_teacher'];

		$sql="INSERT INTO `qualification` (`user_teacher`,`institute`,`degree_level`,`degree_title`,`graduation_year`) VALUES 
			  ('$teacherID','$institute','$degreeLevel','$degreeTitle','$graduationYear')";

		if (mysqli_query($connection,$sql)){
			echo' <script>alert("Data Inserted in qualification")</script>' ;
			header('location: ../Home.php');
			}else{
			echo' <script>alert("Data Not Inserted in qualification")</script>'.mysqli_error($connection);
			header('location:../Home.php');
			}	
	
}else{
	echo "variables not set";
}
?> 