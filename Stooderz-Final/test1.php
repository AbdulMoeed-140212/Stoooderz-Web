<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STOODERZ - Learn today Lead Tomorrow</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/basic.css">
    <script src="js/jQuery/jquery.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    <script src="Forms/form-validation.js"></script>


</head>

<body>
<?php

require 'connection.php';
include_once 'utlities.php';

if(loggedIn()){

     include 'navbar2.php';

    $userEmail=$_SESSION['user'];
}else{

	include 'navbar.php';
}


$form_string = 'd';

$sqlQuery ='SELECT * FROM `course` WHERE `course_title` LIKE "%'.$form_string.'%" OR `user_teacher` in (SELECT user_teacher FROM teacher where email in (SELECT email from person where fname like "%'.$form_string.'%" OR lname like "%'.$form_string.'%"));';
$queryExe=mysqli_query($connection,$sqlQuery);
$row = mysqli_fetch_assoc($queryExe)

 ?>
<div class="panel-body">
                    <?php while($row = mysqli_fetch_assoc($queryExe)) { ?>
                    <article class="row panel panel-default">

                        <div class="col-xs-6 col-xs-offset-3  col-sm-3 col-sm-offset-0">
                            <a href="#" title="Lorem ipsum" class="thumbnail"><img src="images/profile-default.jpg" alt="Lorem ipsum" /></a>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <i class="glyphicon glyphicon-book"></i>
                                    <span>
                                        <?php
                                            echo " ".$row["description"];
                                        ?>
                                    </span>
                                    </li>
                                    <li class="list-group-item">
                                    <?php
									/*
							        echo "<span id=\"CourseID-".$row['courseid']." \" >";
							        echo " Course ID ".$row["courseid"];
							        echo "</span>";/**/
									?>
									 <span class="CourseID" >
                                        <?php
                                            echo $row["courseid"];
                                        ?>
                                    </span>
                                    </li>
                                <li class="list-group-item">
                                    <i class="glyphicon glyphicon-tags"></i>
                                    <span>
                                        <?php echo" Rs. ".$row["fees"];
                                        ?>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <h3>
                                <a href="#" title="">
                                    <?php 
                                        $sql_profile = 
                                            "SELECT `fname`,`lname`,`email`
                                                FROM `person` 
                                                WHERE `email`=(
                                                    SELECT `email` 
                                                    FROM `teacher` 
                                                    WHERE `user_teacher`=".$row["user_teacher"]."
                                                    );   
                                                ";
                                                
                                        $result_sql=mysqli_query($connection,$sql_profile);
                                        $tName = mysqli_fetch_assoc($result_sql);
                                        echo $tName["fname"]." ".$tName["lname"];
                                        $_SESSION['temail']= $tName["email"];
                                    ?>
                                </a>
                            </h3>
                            <h6><?php echo $tName['email']; ?></h6>
                            <p class="hidden-xs"><?php echo $row["course_title"]; ?></p>
                            <span class="plus">
                                <a href="#" title="Enroll" class="btn btn-success enrollci"
                                  <?php
                                    if(loggedIn()){

                                         echo 'data-toggle="modal" data-target="#enroll "';

                                    }else{

                                        echo 'data-toggle="modal" data-target="#LOGIN "';
                                    }
                                    /**/
                                  ?>>
                                  <i class="glyphicon glyphicon-plus"></i><span class="enrollbtn">Enroll</span>
                                </a>
                            </span>
                        </div>          
                    </article>
                    <?php 
                     }
                    ?>
                </div>

 

<script type="text/javascript">
	$(document).ready(function() {
		$('.enrollci').click(function() {
			var cID=$(this).parents('article').find(".CourseID").text();
			var email=$(this).parents('article').find("h6").text();
				//console.log(cID+" "+email);
			$.ajax({
		    		type: "POST",
				    url: "Forms/enroll_request.php",
				    data:{ courseID:cID, temail : email},
				    success: function(data){
		    		console.log("success data is: "+data);
    			}
			})
            $(this).css('background-color','orange');
		});
	});/**/
	
</script>

</body>
</html>
