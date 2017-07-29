
<?php
session_start();
require 'connection.php';

// mysql_real_escape_string and strip_tags are for security 

if($_SERVER['REQUEST_METHOD']=='POST'){
	if(isset($_POST['Submit'])){

	$userEmail=mysqli_real_escape_string($connection,$_POST['email']);
	$userPassword=mysqli_real_escape_string($connection, $_POST['password']);
	$accountType=$_POST['account'];

	 echo $userEmail=strip_tags($userEmail);
	 echo $userPassword=strip_tags($userPassword);

	// here we encrypt the user password
	$userPasswordHashed= md5(md5("asfAAA990###11$%!@00".$userPassword."A_!##$2@/-2asd%??<<:"));
	 

	if(!empty($userEmail)&&!empty($userPasswordHashed)){
		
	// here we create a query to create an account for the user
		
		echo $sqlQuery= "INSERT INTO `person` (`email`,`pwd`,`user_category`) values ('$userEmail','$userPasswordHashed','$accountType')";

    	//echo $sqlQuery=mysqli_query($connection,$sqlQuery);

		if(mysqli_query($connection,$sqlQuery)){
			if($accountType=='teacher'){
				
				$_SESSION['user']=$userEmail;
				//echo '<script type="text/javascript">alert("Teacher Account created"); </script>';
				header('location: Forms/teacherform.php');

			}elseif($accountType=='student'){

				$_SESSION['user']=$userEmail;
				//echo '<script type="text/javascript">alert("Student Account created"); </script>';
				header('location: Forms/studentform.php');

			}else{
				
				//echo '<script type="text/javascript">alert("Failed to create account"); </script>';
				header('location:Home.php');
				//echo "account created";
				}
			}
		}else{
			//echo '<script type="text/javascript">alert("user email or password not entered ");</script>'.mysqli_error($connection);
			//echo "error creating account".mysqli_error($connection);
		}
	  }
}

//mysqli_close($connection);
?>