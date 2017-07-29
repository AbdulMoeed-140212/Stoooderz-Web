
<?php
//require 'phpFiles/utlities.php';
require 'phpFiles/connection.php';

//if((isset($_POST['email'])&&!empty($_POST['email'])) && (isset($_POST['password'])&&!empty($_POST['password'])) &&(isset($_POST['getAccountType']))){

// mysql_real_escape_string and strip_tags are for security 

if($_SERVER['REQUEST_METHOD']=='POST'){
	if(isset($_POST['Submit'])){

	@$userEmail=mysqli_real_escape_string($connection,$_POST['email']);
	@$userPassword=mysqli_real_escape_string($connection, $_POST['password']);
	@$getAccountType=$_POST['account'];
	@$accountType=NULL;
	@$userEmailField=NULL;
	@$userPasswordField=NULL;

	if($getAccountType=="student"){
		$accountType="student";
		//$userEmailField="student";
		//$userPasswordField="Student_Password";
	}else{
		$accountType="teacher";
		//$userEmailField="teacher";
		//$userPasswordField="Teacher_Password";
	}

	$userEmail=strip_tags($userEmail);
	$userPassword=strip_tags($userPassword);

	// here we encrypt the user password
	$userPassword=password_hash($userPassword,PASSWORD_DEFAULT);

	if(!empty($userEmail)&&!empty($userPassword)){

	// here we create a query to create an account for the user
		$sqlQuery= "INSERT INTO `person` (`email`,`pwd`) values ('$userEmail','$userPassword')";
		if(mysqli_query($connection,$sqlQuery)){
			if($accountType=='student'){
				header('location: Forms/studentform.html');
				echo '<script type="text/javascript">alert("Account created"); </script>';
			}elseif($accountType=='teacher'){
				header('location: Forms/teacherform.html');
				echo '<script type="text/javascript">alert("Account created"); </script>';
			}else{
				echo "failed to create account";
				//echo "account created";
				}
			}
		}else{
			echo '<script type="text/javascript">alert("Error creating account");</script>'.mysqli_error($connection);
			//echo "error creating account".mysqli_error($connection);
		}
	  }
}

mysqli_close($connection);
?>


















