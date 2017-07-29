<?php 

session_start();
$userEmail= $_SESSION['user'];


if(isset($_POST['firstname']) and isset($_POST['lastname']) and isset($_POST['gender']) and isset($_POST['CNIC']) and isset($_POST['mobile']) and isset($_POST['fb'])){
	 
	 $fname = $_POST['firstname'];
	 $lname = $_POST['lastname'];
	 $gender = $_POST['gender'];
	 $cnic = $_POST['CNIC'];
	 $mobile_no = $_POST['mobile'];
	 $facebook = $_POST['fb'];
	 //$city = $_POST['City'];
	 
	 if ($_POST['experience'] != "Y"){
	 	$previous_experience = "N";
	 }else{
	 	$previous_experience = "Y";
	 } 
	 
	 
	   $sql = " UPDATE `person` 
              	SET `fname`='$fname',`lname`='$lname',`city`='Lahore',`mobile_no`='$mobile_no'
			  	WHERE  `email`='$userEmail'";
								

	    $sql1 = "INSERT INTO `teacher` (`email`,`gender`,`cnic`,`previous_experience`) VALUES   ('$userEmail','$gender','$cnic','$previous_experience')";
	 	
	 	//$sql1="CALL insertTeacher('$userEmail','$gender','$cnic','$previous_experience')";
	 
		 if (mysqli_query($connection,$sql) and mysqli_query($connection,$sql1)){

		   echo '<script type="text/javascript">alert("Data inserted in person"); </script>';
		   echo '<script type="text/javascript">alert("Data inserted in teacher"); </script>';
		   header('location: qualification.html');

		 }else{

		   echo '<script type="text/javascript">alert("data not inserted in person"); </script>';
		   echo '<script type="text/javascript">alert("data not inserted in teacher"); </script>';
		   header('location: ../Home.php');
		 }

	}else{
		//echo " variables not set";
	}

?> 