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
            var btn = document.forms["signupinit"]["account"];
            var frm = document.forms["signupinit"];
            if (btn.value == "teacher") {
                frm.action = "Forms/teacherform.html";
            } else {
                frm.action = "Forms/studentform.html";
            }
            
        }
        $(document).ready(
            function(){
                $("#side li:first").addClass("active");
                $("#side li").click(
                    function(){
                        $("#side li").removeClass("active");
                        $(this).addClass("active");
                    }
                );
            }
        );
    </script>


    <style>
        
        #toTop {
            width: 50px;
            height: 50px;
            text-align: center;
            vertical-align: middle;
            font-size: 2em;
            position: fixed;
            bottom: 50px;
            right: 50px;
            background-color:gainsboro;
            color: black;
            border: 3px solid gainsboro;
            border-radius: 50%;
            z-index: 20;
        }
        
    </style>
</head>

<body>
<?php 

session_start();
require 'connection.php';
require 'utlities.php';

if (loggedIn()) {
    include 'navbar2.php';
}else{
    include 'navbar.php';
}


 ?>
    
    <!-- Start-->
    <div class="container-fluid add_drop">
        <div class="row" style="postion:relative;">
            <div class="col-sm-2 hidden-xs" style="position:absolute;">
                <nav class=" text-center hidden-xs">
                    <ul class="nav nav-pills nav-stacked" id="side">
                        <li><a href="#FIND" class=" btn btn-default">FIND</a></li>
                        <li><a href="#HIRE" class=" btn btn-default">HIRE</a></li>
                        <li><a href="#LEARN" class=" btn btn-default">Learn</a></li>
                        <li><a href="#PAY" class=" btn btn-default">PAY</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-sm-11 col-sm-offset-1" style="overflow-y: scroll; height:500px;">
            <div class="row " id="FIND">
                <div class="col-md-4 col-md-offset-1 ">
                    <img id="finder" src="images/Teacher About us-02.png" width="100%" height="100%" style="background-color:#558C89; border: 3px solid #ececea">
                </div>
                <div class="col-md-6  clearfix panel panel-default ">
                    <h1 class="">FIND</h1>
                    <h2 class="">Find best teacher</h2>
                    <h4 class="">
                        Stooderz is providing with a variety of talented people such as computer scientists, designers, web developers, writers, and a lot more.
                    </h4>
                    <P>
                        <b>Start by finding the subject: </b> Tell us about your requirements and the kind of teacher you need.</P>
                    <P><b>Stooderz will see your needs: </b> Our search method will help you find the teachers according to their skills, subjects, locations, etc.</P>
                    <P><b>We will provide you with the best candidates: </b> You can look to differe nt profiles and also you can see the relevant ads posted by the related teachers.</P>
                </div>
            </div>
            <div class="row" id="HIRE">
                <div class="col-md-4 col-md-offset-1 clearfix">
                    <img id="hirer" src="images/process1.jpg" width="100%" height="100%" style="background-color:#558C89; border: 3px solid #ececea">
                </div>
                <div class="col-md-6  clearfix panel panel-default">

                    <h1>HIRE</h1>
                    <h2>Hire someone best for you</h2>
                    <h4>See different profiles and select the one according to your demands to fill your purpose.</h4>
                    <P><b>Browse profiles: </b>View finalists’ Stooderz profiles to see ratings, portfolios, Job Success, and much more more.</P>
                    <P><b>Review proposals: </b>Our search method will help you find the teachers according to their skills, subjects, locations, etc.</P>
                    <P><b>Review proposals: </b>Our search method will help you find the teachers according to their skills, subjects, locations, etc.</P>
                    <P><b>Review ads: </b>See for different ads, timings and the locations where the courses are being taught currently.</P>
                    <P><b>Schedule a meeting/chat: </b>Entertain your queries by asking different questions and finally choose the best and contract.</P>
                </div>
            </div>
            <div class="row" id="LEARN">
                <div class="col-md-4 col-md-offset-1">
                    <img id="learner" src="images/How it Works-05.png" width="100%" height="100%" style="background-color:#558C89; border: 3px solid #ececea">
                </div>
                <div class="col-md-6  clearfix panel panel-default">
                    <h1>LEARN</h1>
                    <h2>Learn according to needs</h2>
                    <h4>Each course may have different topics to cover. Learn the ones you have finalised and are of your best interest.</h4>
                    <P><b>Learn online using available apps: </b>Learn by settling the timetable on regular basis using different video chatting applications easily available online.
                    </P>
                    <P><b>Share lectures/slides: </b>Send and receive notes or slides in a safe environment to get maximum help.</P>
                    <P><b>Ask questions: </b>Clear all the doubts by asking the different questions online or in a physical meeting.</P>
                </div>
            </div>
            <div class="row" id="PAY">
                <div class="col-md-4 col-md-offset-1">
                    <img id="payer" src="images/process4.jpg" width="100%" height="100%" style="background-color:#558C89; border: 3px solid #ececea">
                </div>
                <div class=" col-md-6  clearfix panel panel-default">
                    <h1>PAY</h1>
                    <h2>Pay for what you have learnt</h2>
                    <h4>Pay on hourly, weekly, monthly basis or pay for the complete learning using different paying options available.</h4>
                </div>
            </div>
            </div>
        </div>
    </div>
    <a id="toTop" href="#FIND">&and;</a>
    <!-- End -->



    <div class="container-fluid ">
        <div class="row panel panel-default text-center">
            <div class="col-xs-12  col-sm-12  panel-heading">

                <ul class="list-unstyled list-inline ">
                    <li class="text-info">Follow US</li>
                    <li>
                        <a href="http://www.youtube.com"><i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="http://www.facebook.com"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="http://www.twitter.com"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
                    </li>
                    <li>
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
</body>

</html>
