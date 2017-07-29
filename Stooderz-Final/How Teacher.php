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
            function() {
                $("#side li:first").addClass("active");
                $("#side li").click(
                    function() {
                        $("#side li").removeClass("active");
                        $(this).addClass("active");
                    }
                );
            }
        );

    </script>

    <style>
        body {
            position: relative;
        }
        
        #toTop {
            width: 50px;
            height: 50px;
            text-align: center;
            vertical-align: middle;
            font-size: 2em;
            position: fixed;
            bottom: 50px;
            right: 50px;
            background-color: gainsboro;
            color: black;
            border: 3px solid gainsboro;
            border-radius: 50%;
            z-index: 20;
        }

    </style>
</head>

<body class="add_drop">
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
    <div class="container-fluid ">
        <div class="row">
            <div class="col-sm-2 hidden-xs">
                <nav class=" text-center hidden-xs" id="navbar-example">
                    <ul class="nav nav-pills nav-stacked" id="side" data-spy="affix" data-offset-top="205">
                        <li class="active"><a href="#FIND" class=" btn btn-default">PROFILE</a></li>
                        <li><a href="#HIRE" class=" btn btn-default">ADS</a></li>
                        <li><a href="#LEARN" class=" btn btn-default">TEACH</a></li>
                        <li><a href="#PAY" class=" btn btn-default">EARN</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-sm-10 " id="scroller" style="overflow-y: scroll; height:500px;">
                
                <div class="row ">
                    <a name="FIND">&nbsp;</a>
                    <div class="col-md-4 col-md-offset-1 ">
                        <img id="finder" src="images/Teacher About us-02.png" width="100%" height="100%" style="background-color:#558C89; border: 3px solid #ececea">
                    </div>
                    <div class="col-md-6   clearfix panel panel-default">
                        <h1 class="">PROFILE</h1>
                        <h2 class="">Make your own profile</h2>
                        <h4 class="">
                            Make a profile according to your skills and areas of expertise to let students have a quick look at your talents.
                        </h4>
                        <P>
                            <b>Start by finding the subject: </b> Tell us about your requirements and the kind of teacher you need.</P>
                        <P><b>Edit profiles: </b>Fill out the essential fields of the profile and you can also edit them in future according to your degrees.</P>
                        <P><b>Review proposals: </b>You can see different proposals sent by the students and can talk to them and teach the ones you think are easily manageable.</P>
                        <P><b>Schedule a meeting/chat: </b>Entertain your queries by asking different questions and finally choose the best and contract.</P>
                    </div>
                </div>
                <a name="HIRE"> &nbsp;</a>
                <div class="row">
                    <div class="col-md-4 col-md-offset-1 clearfix ">
                        <img id="hirer" src="images/process1.jpg" width="100%" height="100%" style="background-color:#558C89; border: 3px solid #ececea">
                    </div>
                    <div name="HIRE" class="col-md-6   clearfix panel panel-default">

                        <h1>ADS</h1>
                        <h2>Post an ad</h2>
                        <h4>Stooderz is providing with an opurtunity to post an ad containing information such as subject, timings and locations to help student find the best options.</h4>
                        <P><b>Ad by subjects: </b>Tell us about the currently ongoing lectures nearby or they can be taken online.</P>
                        <P><b>Stooderz will see your needs: </b>Our search method will help you by making you recognizable to students according to your skills, subjects, locations, etc.</P>
                        <P><b>We will provide you with students: </b>You can talk to different students and accept their proposals and start teaching them.</P>
                    </div>
                </div>
                <a name="LEARN"> &nbsp;</a>
                <div class="row">
                    <div class="col-md-4 col-md-offset-1">
                        <img id="learner" src="images/How it Works-05.png" width="100%" height="100%" style="background-color:#558C89; border: 3px solid #ececea">
                    </div>
                    <div class="col-md-6   clearfix panel panel-default">
                        <h1>TEACH</h1>
                        <h2>Teach according to skills</h2>
                        <h4>Each course may have different topics to cover. Teach the ones you have experienced on and are of your best interest.</h4>
                        <P><b>Teach online using available apps: </b>Teach by settling the timetable on regular basis using different video chatting applications easily available online.
                        </P>
                        <P><b>Share lectures/slides: </b>Send and receive notes or slides in a safe environment to get maximum help.</P>
                        <P><b>Entertain questions: </b>Clear all the doubts by entertaining the different questions online or in a physical meeting.</P>
                    </div>
                </div>
                <a name="PAY"></a>
                <div class="row">
                    <div class="col-md-4 col-md-offset-1">
                        <img id="payer" src="images/process4.jpg" width="100%" height="100%" style="background-color:#558C89; border: 3px solid #ececea">
                    </div>
                    <div class=" col-md-6   clearfix panel panel-default">
                        <h1>EARN</h1>
                        <h2>Earn for what you have taught</h2>
                        <h4>Earn on hourly, weekly, monthly basis or earn for the complete coaching course using different paying options available.</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <a id="toTop" href="#FIND">&and;</a>

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
