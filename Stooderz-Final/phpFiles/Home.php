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

<script>
function change_destination() {
   var btn= document.forms["signupinit"]["account"];
   var frm=  document.forms["signupinit"];
   if(btn.value == "teacher")
   {
	   //frm.action="Forms/teacherform.html";

}else{
	   //frm.action="Forms/studentform.html";
   }
   
}
</script>
</head>

<body>
<?php
session_start();

require 'phpFiles/connection.php';
include_once 'phpFiles/SignUp.php';
include_once 'phpFiles/login.php';
include_once 'phpFiles/utlities.php';


if(loggedIn()){

    //echo '<script type="text/javascript">alert("Logged In"); </script>';
    //header('location: Home.php');
    include 'navbar2.html';
}else{
	include 'navbar.html';
    //header('location: Home.php');
   // echo '<script type="text/javascript">alert("Log In Error "); </script>';
}

/**/
?>
    

   <!-- /.carousel -->
    <div id="myCarousel" class="carousel slide add_drop" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/slide-01.jpg" alt="First slide">
            </div>
            <div class="item">
                <img src="images/slide-02.jpg" alt="Second slide">
            </div>
            <div class="item">
                <img src="images/slide-03.jpg" alt="Third slide">
            </div>
            <div class="item">
                <img src="images/slide-04.jpg" alt="Third slide">
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev"></a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next"></a>
    </div>
    <div class="search" style="height:auto; margin-top:-25%">
        <div class="jumbotron text-center" id="formDown">
            <form class="form-inline" action="Search.html">
                <div class="input-group">
                    <input type="text" class="form-control" size="50" placeholder="Search...." required>
                    <div class="input-group-btn">
                        <input type="submit" value="Search" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
        <br><br><br><br><br>
    </div>
    <!-- /.gallery categories-->
    <div class="container-fluid light ">
        <div class="row well">
            <h2 class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center"> Explore Following Categories</h2>
        </div>
        <div class="row">
            <div class="col-xs-6 col-md-2 col-md-offset-2 col-sm-2 col-sm-offset-2">
                <div class="thumbnail ">
                    <a href="#">
                        <img class="img-responsive " src="images/category-01.jpg" alt="Lights" style="width:100%">
                        <div class="caption text-center">
                            <p>Literature</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xs-6 col-md-2  col-sm-2 ">
                <div class="thumbnail ">
                    <a href="#" >
                        <img class="img-responsive " src="images/category-02.jpg" alt="Lights" style="width:100%">
                        <div class="caption text-center">
                            <p>Science</p>
                        </div>
                    </a>
                </div>
            </div><div class="col-xs-6 col-md-2  col-sm-2 ">
                <div class="thumbnail ">
                    <a href="#" >
                        <img class="img-responsive " src="images/category-03.jpg" alt="Lights" style="width:100%">
                        <div class="caption text-center">
                            <p>Mathematics</p>
                        </div>
                    </a>
                </div>
            </div><div class="col-xs-6 col-md-2  col-sm-2 ">
                <div class="thumbnail ">
                    <a href="#" >
                        <img class="img-responsive " src="images/category-04.jpg" alt="Lights" style="width:100%">
                        <div class="caption text-center">
                            <p>Medicine</p>
                        </div>
                    </a>
                </div>
            </div>
        
        </div>
        <div class="row">
            <div class="col-xs-6 col-md-2 col-md-offset-2 col-sm-2 col-sm-offset-2">
                <div class="thumbnail ">
                    <a href="#" >
                        <img class="img-responsive " src="images/category-05.jpg" alt="Lights" style="width:100%">
                        <div class="caption text-center">
                            <p>Programming</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xs-6 col-md-2  col-sm-2 ">
                <div class="thumbnail ">
                    <a href="#" >
                        <img class="img-responsive " src="images/category-06.jpg" alt="Lights" style="width:100%">
                        <div class="caption text-center">
                            <p>Technology</p>
                        </div>
                    </a>
                </div>
            </div><div class="col-xs-6 col-md-2  col-sm-2 ">
                <div class="thumbnail ">
                    <a href="#" >
                        <img class="img-responsive " src="images/category-07.jpg" alt="Lights" style="width:100%">
                        <div class="caption text-center">
                            <p>Art & Design</p>
                        </div>
                    </a>
                </div>
            </div><div class="col-xs-6 col-md-2  col-sm-2 ">
                <div class="thumbnail ">
                    <a href="#">
                        <img class="img-responsive " src="images/category-08.jpg" alt="Lights" style="width:100%">
                        <div class="caption text-center">
                            <p>Business</p>
                        </div>
                    </a>
                </div>
            </div>
        
        </div>
    </div>
    <div class="container-fluid panel panel-default">
        <div class="row panel-heading">
            <h2 class="col-xs-6 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3  text-center"> How Does it Works?</h2>
        </div>
        <div class="row panel-body">
            <div class=" col-md-3 col-sm-3 ">
                <div class="img-rounded">
                    <a href="hitwstudent.html#FIND">
                        <div class="caption text-center">
                            <h4>Find</h4>
                        </div>
                        <img class="img-responsive" src="images/process1.jpg" alt="Lights" style="width:100%">
                        <div class="caption text-left">
                            <p>Search for the right teacher to learn what you desire</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class=" col-md-3 col-sm-3">
                <div class="img-rounded">
                    <a href="hitwstudent.html#HIRE">
                        <div class="caption text-center">
                            <h4>Get Enrolled</h4>
                        </div>
                        <img class="img-responsive " src="images/process2.jpg" alt="Lights" style="width:100%">
                        <div class="caption text-left">
                            <p>See profiles, reviews, and qualification then choose top teachers. Hire a favorite and start learning</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class=" col-md-3 col-sm-3">
                <div class="img-rounded">
                    <a href="hitwstudent.html#LEARN">
                        <div class="caption text-center">
                            <h4>Learn</h4>
                        </div>
                        <img class="img-responsive " src="images/process3.jpg" alt="Lights" style="width:100%">
                        <div class="caption text-left">
                            <p>Set a meeting place and start learning. Chat, share documents, and collaborate with your mentor.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="img-rounded">
                    <a href="hitwstudent.html#PAY">
                        <div class="caption text-center">
                            <h4>Pay</h4>
                        </div>
                        <img class="img-responsive " src="images/process4.jpg" alt="Lights" style="width:100%">
                        <div class="caption text-left">
                            <p>Decide the amount first and then pay for what you learn.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid well">
        <div class="row ">
            <h2 class="col-md-4 col-md-offset-4   text-center">Trending Courses</h2>
        </div>
        <div class="row">
            <div class=" col-sm-2 col-sm-offset-2">
                <ul class="list-unstyled">
                    <li><a href="#">Android Development</a></li>
                    <li><a href="#">AngularJS</a></li>
                    <li><a href="#">Javascript</a></li>
                    <li><a href="#">C# </a></li>
                    <li><a href="#">Content Writing</a></li>
                    <li><a href="#">Copywriters</a></li>
                    <li><a href="#">Customer Service Representatives</a></li>
                    <li><a href="#">Data Entry Analysis</a></li>
                </ul>
            </div>
            <div class="col-sm-2">
                <ul class="list-unstyled">
                    <li><a href="#"> Mobile Phone
 </a></li>
                    <li><a href="#">PHP</a></li>
                    <li><a href="#">HTML</a></li>
                    <li><a href="#">Software Development </a></li>
                    <li><a href="#">Translation</a></li>
                    <li><a href="#">Graphic Design</a></li>
                    <li><a href="#">Website Design</a></li>
                    <li><a href="#">LOGO Design</a></li>
                </ul>
            </div>
            <div class="col-sm-2">
                <ul class="list-unstyled">
                    <li><a href="#">SEO</a></li>
                    <li><a href="#">Articles</a></li>
                    <li><a href="#">Biology</a></li>
                    <li><a href="#">Linear Algebra</a></li>
                    <li><a href="#">Physics</a></li>
                    <li><a href="#">Architecture</a></li>
                    <li><a href="#">Social Sciences</a></li>
                    <li><a href="#">Natural Sciences</a></li>
                </ul>
            </div>
            <div class="col-sm-2">
                <ul class="list-unstyled">
                    <li><a href="#">Pharmacy</a></li>
                    <li><a href="#">Zology</a></li>
                    <li><a href="#">Circuit Analysis</a></li>
                    <li><a href="#">Android</a></li>
                    <li><a href="#">IOS developement </a></li>
                    <li><a href="#">Dentist</a></li>
                    <li><a href="#">Biotechnology</a></li>
                    <li><a href="#">Chemicals</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid ">
        <div class="row hidden-xs">
            <div class="col-xs-12">
                    <table id="teacher_counter" class="table table-striped table-bordered text-center">
                        <tr>
                            <td><b>52870</b></td>
                            <td><b>67828</b></td>
                        </tr>
                        <tr>
                            <td  title="Number of Registered Students">REGISTERED STUDENTS</td>
                            <td  title="Number of Registered Teachers">REGISTERED TEACHERS</td>
                        </tr>
                    </table>
            </div>
        </div>
        <div class="row  hidden-xs panel panel-default ">
            <div class="col-md-2 col-sm-2 col-md-offset-3 col-sm-offset-1 panel-heading">
                <dl>NETWORK</dl>
                <ul class="list-unstyled  ">

                    <li title="Future Updations">Projects</li>
                    <li title="Sitemap">Sitemap</li>
                    <li title="Read Our Privacy Policy">Privacy Policy</li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-4 panel-heading">
                <dl>ABOUT</dl>
                <ul class="list-unstyled  ">
                    <li title="Fill a Form to be a Part of This Community"><a href="How Teacher.html">Join as <b>Teacher</b></a></li>
                    <li title="Fill a Form to be a Part of This Community"><a href="hitwstudent.html">Join as <b>Student</b></a></li>
                    <li title="Meet The Team Behind This Idea"><a href="AboutUs.html">Team</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-3 panel-heading">
                <dl>BROWSE</dl>
                <ul class="list-unstyled  ">
                    <li title="Search Teachers by Country/Area"><a href="Search.html">Teacher by Country</a></li>
                    <li title="Search Teachers by Rating"><a href="Search.html">Teacher by Rating</a></li>
                    <li title="Search Teachers by Skills/Qualification"><a href="Search.html">Teacher by Skills</a></li>
                </ul>
            </div>
        </div>
        <div class="row panel panel-default text-center">
            <div class="col-xs-12  col-sm-12  panel-heading">

                <ul class="list-unstyled list-inline ">
                    <li class="text-info">FOLLOW US</li>
                    <li title="Youtube">
                        <a href="http://www.youtube.com"><i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i></a>
                    </li>
                    <li title="Facebook">
                        <a href="http://www.facebook.com"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a>
                    </li>
                    <li title="Twitter">
                        <a href="http://www.twitter.com"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
                    </li>
                    <li title="Gmail">
                        <a href="http://www.plus.google.com"><i class="fa fa-google-plus-official fa-2x" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>



    <!-- Modal LogIN -->
    <div class="modal fade" id="LOGIN" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">LOG IN</h4>
                </div>
                <form method="post" action="" name="login">
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
                <form method="post" action="" name="signupinit">
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
                            <input type="Submit" name="Submit" value="CreateAccount" class="btn btn-primary" id="login">
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
    <div class="visible-xs" id="testing"></div>
    <script>
        $(document).ready(
            function(){
                if(!$("#testing").is(":hidden")){
                    $(".carousel .item").css("height","200px");
                    $(".carousel-inner > .item > img").css("height","200px");
                    $(".search").css("height","200px");
                }
                else{
                    $(".carousel .item").css("height","500px");
                    $(".carousel-inner > .item > img").css("height","500px");
                    $(".search").css("height","300px");
                }
                $('#formUp').hide();
                $(window).scroll(function() {
                
                    if ($(this).scrollTop()>250 ){
                        $('#formUp').slideDown();
                     }
                    else{
                        $('#formUp').slideUp();
                    }
                    
                });
                $( window ).resize(function() {
                if(!$("#testing").is(":hidden")){
                    $(".carousel .item").css("height","200px");
                    $(".carousel-inner > .item > img").css("height","200px");
                    $(".search").css("height","200px");
                }
                else{
                    $(".carousel .item").css("height","500px");
                    $(".carousel-inner > .item > img").css("height","500px");
                    $(".search").css("height","300px");
                }
                });
            
            }
        );
    </script>


    
</body>

</html>
