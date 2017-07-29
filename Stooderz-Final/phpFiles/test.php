<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
?>
<!DOCTYPE html>
<html>
<head>

<!--Forms/studentform.html-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sign up test</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<form action="test.php" method="POST" accept-charset="utf-8">
		enter email<input type="email" name="email"><br>
		enter password <input type="password" name="password"><br>
		register as <input type="radio" name="account" value="student">student
		<input type="radio" name="account" value="teacher">teacher <br>
		<input type="submit" name="Submit" value="login">
		<input type="submit" name="Submit" value="logout">
	</form>
</body>
</html>



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

/*
function loggedin(){
	if (isset($_SESSION['user_id'])&& !empty($_SESSION['user_id'])) {
		return true;
	}else{	
		return false;
	}	
}

/**/

if(isset($_POST['email'])&&isset($_POST['password'])){
			
			@$userEmail=mysqli_real_escape_string($connection,$_POST['email']);
			@$userPassword=mysqli_real_escape_string($connection, $_POST['password']);

			$userEmail=strip_tags($userEmail);
			$userPassword=strip_tags($userPassword);

			if(!empty($userEmail)&&!empty($userPassword)){
				$sqlQuery="SELECT `email` FROM `person` WHERE `email`='$userEmail' AND `pwd`='$userPassword'";
				$queryExe=mysqli_query($connection,$sqlQuery);
				$result=mysqli_num_rows($queryExe);
				$row=mysqli_fetch_array($queryExe)[0];
				if($result>=1){
					printf ($row);
					echo '<script type="text/javascript">alert("Logged In"); </script>';

					$_SESSION['user']=$row;

					header('location: output.php');
				}else{
				echo '<script type="text/javascript">alert("Could not log In"); </script>'.mysqli_error($connection);
					//header('location: test.php');
				}
			}else{
				echo '<script type="text/javascript">alert("Provide email or password"); </script>'.mysqli_error($connection);
			}
		}

 
mysqli_close($connection);
?>