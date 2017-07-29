<?php
session_start();
require 'connection.php';

if(isset($_POST['email'])&&isset($_POST['password'])){
			
			@$userEmail=mysqli_real_escape_string($connection,$_POST['email']);
			@$userPassword=mysqli_real_escape_string($connection, $_POST['password']);
			@$rememberMe=$_POST['rememeberMe'];

			$userEmail=strip_tags($userEmail);
			$userPassword=strip_tags($userPassword);



			if(!empty($userEmail)&&!empty($userPassword)){

				/*
				$sql="SELECT * FROM `person` WHERE `email`='$userEmail' ";
				$result=mysqli_fetch_array(mysqli_query($connection,$sql),MYSQLI_BOTH);
				
				$passwordVerify=password_verify($userPassword,$result['pwd']);
				if($passwordVerify){
					$_SESSION['user']=$userEmail;
					echo '<script type="text/javascript">alert("Logged In"); </script>';
					header('location: Home.php');
				}else{
					echo '<script type="text/javascript">alert("incorrect password"); </script>';
				}
					/*/

				$userPassword=md5(md5("asfAAA990###11$%!@00".$userPassword."A_!##$2@/-2asd%??<<:"));
				
				$sqlQuery="SELECT `email` FROM `person` WHERE `email`='$userEmail' AND `pwd`='$userPassword'";
				
				$queryExe=mysqli_query($connection,$sqlQuery);
				$result=mysqli_num_rows($queryExe);
				$row=mysqli_fetch_array($queryExe,MYSQLI_BOTH)['email'];

				if($result==1){

					//printf ($row);
					if(!empty($row)){
					$_SESSION['user']=$row;
					
					//$Message="Logged In";
					//header("Location: Home.php?Message=" . urlencode($Message));
					header("Location: Home.php");
					}else{
					echo '<script type="text/javascript">alert("row variable is empty"); </script>'.mysqli_error($connection);	
					}

				}else{
					
				//echo '<script type="text/javascript">alert("User does not exists"); </script>'.mysqli_error($connection);
				header('location: Home.php');
				echo '<script type="text/javascript">alert("User does not exists"); </script>'.mysqli_error($connection);
				
				}
				/**/
			}else{
				echo '<script type="text/javascript">alert("Provide email or password"); </script>'.mysqli_error($connection);
			}
		}
 
//mysqli_close($connection);
 ?>