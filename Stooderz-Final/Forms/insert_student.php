<?php 

session_start();

//include '../SignUp.php';
$userEmail= $_SESSION['user'];


//if ($_POST['Submit']) {
	if(isset($_POST['firstname']) and isset($_POST['lastname']) and /*isset($_POST['address']) and isset($_POST['dob']) and */isset($_POST['institute']) and isset($_POST['cclass']) and isset($_POST['mobile'])){

	 @$fname = $_POST['firstname'];
	 @$lname = $_POST['lastname'];
	 @$institute = $_POST['institute'];
	 @$current_class = $_POST['cclass'];
	 @$mobile_no = $_POST['mobile'];
	 //$city = $_POST['cities'];
	 
	 $sql = " UPDATE `person` 
              SET `fname`='$fname',`lname`='$lname',`city`='Lahore',`mobile_no`='$mobile_no'
			  WHERE  `email`='$userEmail'";
								
	 //$sql1 = "INSERT INTO `student` (`email`,`institute`,`current_class`) VALUES ('$userEmail','$institute','$current_class')";
	 
	 $sql1="CALL insertStudent('$userEmail','$institute','$current_class')";

	 if(!empty($_POST['firstname']) and !empty($_POST['lastname'])and !empty($_POST['institute'])and !empty($_POST['cclass'])and
	  	!empty($_POST['mobile'])){
	 	if (mysqli_query($connection,$sql)){

		   echo '<script type="text/javascript">alert("Data inserted in person"); </script>';

		 }else{

		   echo '<script type="text/javascript">alert("data not inserted in person"); </script>';

		 }

		 if(mysqli_query($connection,$sql1)){

		   echo '<script type="text/javascript">alert("Data inserted in student"); </script>';

		 }else{

		   echo '<script type="text/javascript">alert("Data inserted in student"); </script>';

	 	}
	 	header('location:../Home.php');
	 }else{

		   echo '<script type="text/javascript">alert("One or more input field is empty"); </script>';
	 }

	}else{
		//echo " variables not set";
	}
/*
}else{
	echo "error".mysqli_error($connection);
}
*/	
//mysqli_close($connection);
?> 