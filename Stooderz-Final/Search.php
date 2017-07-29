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
//include_once 'SignUp.php';
//include_once 'login.php';
include_once 'utlities.php';



if(loggedIn()){

     include 'navbar2.php';

    $userEmail=$_SESSION['user'];
}else{

	include 'navbar.php';
}



/**/
?>
    <div class="container-fluid " id="firstBump" style="margin-top:10%">
        <div class="row" id="mBody">
            <div class="col-md-2 panel panel-info hidden-xs hidden-md" id="lNav">
                <div class="panel-heading ">
                    <h3>Filters</h3>
                </div>
                <div class="panel-body">
                    <form>
                        <h5>Categories</h5>
                        <?php
                        $categoies = "SELECT `category_title` FROM `category`";
                        $cat_result = mysqli_query($connection,$categoies);
                        while($row = mysqli_fetch_assoc($cat_result)) { 
                        ?>
                        <div>
                            <input type="checkbox" name = "category" value="<?php echo $row["category_title"]?>">
                            <label class="label label-primary">
                                <?php echo $row["category_title"]?>
                            </label>
                        </div>
                        <?php 
                        }
                        ?>
                        <h5>Location</h5>
                        <?php
                        $categoies = "SELECT `city_name` FROM `cities`";
                        $cat_result = mysqli_query($connection,$categoies);
                        while($row = mysqli_fetch_assoc($cat_result)) { 
                        ?>
                        <div>
                            <input type="checkbox" name="location" value="<?php echo $row["city_name"]?>">
                            <label class="label label-primary">
                                <?php echo $row["city_name"]?>
                            </label>
                        </div>
                        <?php 
                        }
                        ?>
                       
                        <h5>Fee</h5>
                        <div><input type="checkbox" value="1"><label class="label label-primary">less than 500Rs</label></div>
                        <div><input type="checkbox" value="2"><label class="label label-primary">500Rs - 1000Rs</label></div>
                        <div><input type="checkbox" value="3"><label class="label label-primary">1000Rs - 2000Rs</label></div>
                        <div><input type="checkbox" value="4"><label class="label label-primary">2000Rs - 5000Rs</label></div>
                        <div><input type="checkbox" value="5"><label class="label label-primary">5000Rs - 10,000Rs</label></div>
                        <div style="margin-top:10px;">
                        <input type="button" value="filter" class="btn btn-default">
                        </div>
                    </form>
                </div>
            </div>
             <?php
              //Starting php code
             if (isset($_POST['search'])) {
                $form_string = $_POST["search"];
                $number_of_ads = 0;
                
                // serch from database
                if(!empty($form_string))
                   {
                       $sqlQuery ='SELECT * FROM `course` WHERE `course_title` LIKE "%'.$form_string.'%" OR `user_teacher` in (SELECT user_teacher FROM teacher where email in (SELECT email from person where fname like "%'.$form_string.'%" OR lname like "%'.$form_string.'%"));';
                        $queryExe=mysqli_query($connection,$sqlQuery);
                        if($queryExe)    
                                {$number_of_ads = mysqli_num_rows($queryExe);}
                }
                   
            ?>
            <div class="col-md-10 col-md-offset-0 panel panel-primary" id="sReasult">
                <hgroup class="panel-heading">
                    <h3>Results</h3>
                    <h6 class="lead">
                        <strong class="text-danger"><?php echo $number_of_ads; ?></strong> results were found for the search for <strong class="text-danger"> <?php echo $form_string; ?></strong>
                    </h6>
                </hgroup>
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
                                    <li class="list-group-item" style="display: none;">
                                    <i class="glyphicon glyphicon-tags"></i>
                                    <span class="CourseID" >
                                        <?php
                                            echo $row["courseid"];
                                        ?>
                                    </span>
                                    </li>
                                <li class="list-group-item" >
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
                                        //$_SESSION['temail']= $tName["email"];
                                    ?>
                                </a>
                            </h3>
                            <h6><?php echo $tName['email']; ?></h6>
                            <p class="hidden-xs"><?php echo $row["course_title"]; ?></p>
                            <span class="plus">
                                <a href="#" title="Enroll" class="btn btn-success enrollci "
                                  <?php
                                    if(!loggedIn()){
                                    
                                         echo 'data-toggle="modal" data-target="#LOGIN "';
                                    }else{

                                        // echo 'data-toggle="modal" data-target="#enroll"';
                                        
                                    }
                                    /**/
                                  ?>>
                                  <i class="glyphicon glyphicon-plus"></i><span>Enroll</span>
                                </a>
                            </span>
                        </div>          
                    </article>
                    <?php 
                            }
                        }
                    ?>
                </div>
                <div class="panel-footer text-center">
                    <nav aria-label="Page navigation  ">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">9</a></li>
                            <li><a href="#">10</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Search body End-->

   <?php include 'footer.php' ?>

    <div class="modal fade" id="LOGIN" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">LOG IN</h4>
                </div>
                <form method="post" action="login.php" name="login">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" placeholder="Email ID" required class="form-control" id="logemail">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Password" required class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="rememberMe" class="form-fields">
                            <label for="rememberMe"> Remember me</label>
                            <a href="#" class="btn btn-link">Forgot Password?</a>
                        </div>
                        <div class="form-group text-right">
                            <input type="Submit" name="Submit" value="Login" class="btn btn-primary" id="login">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="form-group text-center">
                            <label>Don't have an account ?&nbsp; </label><input data-toggle="modal" data-target="#singup" type="button"  name="Signup" value="Create Account" class="btn btn-primary" data-dismiss="modal">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Signup -->
    <div class="modal fade" id="singup" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Sign Up</h4>
                </div>
                <form method="post" action="SignUp.php" name="signupinit">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Email Id" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" id="password" placeholder="Password" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="repassword" id="repassword" placeholder="Confirm Password" required class="form-control">
                        </div>
                        <div class="form-group panel panel-primary text-center">
                            <label class="panel">Join us as</label><br>
                            <input type="radio" name="account" value="student" onclick="change_destination();" checked><label for="account" class="checkbox-inline">Student</label>
                            <input type="radio" name="account" value="teacher" onclick="change_destination();"> <label for="account" class="checkbox-inline">Teacher</label>
                        </div>

                        <div class="form-group panel panel-primary">

                            <label><input type="checkbox" name="termAndCondition" class="form-btn" required> By registering , you accept our <a href="#" class="btn  btn-link">Terms of Use</a> </label>
                        </div>


                        <div style="text-align:center">
                            <input type="Submit" name="Submit" value="Create Account" class="btn btn-primary" id="login">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="form-group text-center">
                            <label>Already have an account?</label>
                            <input type="button" align="center" name="LogIn" value="Login" class="btn btn-primary" data-toggle="modal" data-target="#LOGIN " data-dismiss="modal">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ENrollment-->

    <!-- Modal Enroll -->
 <?php  /*
    <div class="modal fade" id="enroll" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3><a href="#" title="">

                        <?php $sql="SELECT * FROM person WHERE `email`='$userEmail' ";
                        $sql1="SELECT * FROM `student` WHERE `email`='$userEmail' ";
                      

                        $result=mysqli_fetch_array(mysqli_query($connection,$sql),MYSQLI_BOTH);
                        $result1=mysqli_fetch_array(mysqli_query($connection,$sql1),MYSQLI_BOTH);
     
                        echo ucfirst($result['fname']). " ". ucfirst($result['lname']) ; ?>  </a></h3>
                    <p class="hidden-xs">Enroll into this course</p>
                    <span class="plus">
                    <form action="Forms/enroll_request.php" method="POST" accept-charset="utf-8">
                        <input type="submit" name="enroll" value="Enroll" class="btn btn-success">
                    </form>
                    </span>
                    <div class="modal-body">
                        <!-- Testing disqus-->
                        <div id="disqus_thread"></div>
                        <script>
                            /*
                             *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                             *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                            /*
                            var disqus_config = function () {
                            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                            };
                            
                            (function() { // DON'T EDIT BELOW THIS LINE
                                var d = document,
                                    s = d.createElement('script');
                                s.src = 'https://localhost-com-4.disqus.com/embed.js';
                                s.setAttribute('data-timestamp', +new Date());
                                (d.head || d.body).appendChild(s);
                            })();
                            
                        </script>
                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

                        <!--	Disqus ends here	-->

                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>
    </div>
    */?>
        <script>
            $(document).ready(
                function() {
                    $("input:checkbox").click(
                        function() {
                            if ($(this).is(":checked")) {
                                if ($(this).next().hasClass("label-primary")) {
                                    $(this).next().removeClass("label-primary");
                                    $(this).next().addClass("label-info");

                                }

                            } else {
                                if ($(this).next().hasClass("label-info")) {
                                    $(this).next().removeClass("label-info");
                                    $(this).next().addClass("label-primary");
                                }
                            }
                        }
                    );
                    $("article").hover(
                        function() {
                            $(this).css("background-color", "#ececea");
                        },
                        function() {
                            $(this).css("background-color", "");
                        }
                    );
                }
            );

        </script>
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
                        success: function(){
                        alert("your enroll request has been sent");
                    }
                });
                $(this).css('background-color','orange').text('Unenroll');
            });
        });
    </script>
</body>

</html>
