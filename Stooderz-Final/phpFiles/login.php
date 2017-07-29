<?php

//require 'phpFiles/utlities.php';
require 'phpFiles/connection.php';


if(isset($_POST['email'])&&isset($_POST['password'])){
			
			@$userEmail=mysqli_real_escape_string($connection,$_POST['email']);
			@$userPassword=mysqli_real_escape_string($connection, $_POST['password']);

			$userEmail=strip_tags($userEmail);
			$userPassword=strip_tags($userPassword);

			if(!empty($userEmail)&&!empty($userPassword)){
				$sqlQuery="SELECT * FROM `person` WHERE `email`='$userEmail' AND `pwd`='$userPassword'";
				$queryExe=mysqli_query($connection,$sqlQuery);
				$result=mysqli_num_rows($queryExe);
				$row=mysqli_fetch_array($queryExe)[0];

				if($result>=1){
					echo '<script type="text/javascript">alert("Logged In"); </script>';
					//printf ($row);
					if(!empty($row)){
					$_SESSION['user']=$row;
					}else{
					echo '<script type="text/javascript">alert("Could not log In"); </script>'.mysqli_error($connection);	
					}

					//header('location: Profile.html');
				}else{
				//echo '<script type="text/javascript">alert("Could not log In"); </script>'.mysqli_error($connection);
					//header('location: Home.php');

				//echo '<script type="text/javascript">alert("Could not log In") </script>'.mysqli_error($connection);
				}
			}else{
				echo '<script type="text/javascript">alert("Provide email or password"); </script>'.mysqli_error($connection);
			}
		}
 
mysqli_close($connection);
 ?>