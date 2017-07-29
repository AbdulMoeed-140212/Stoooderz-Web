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
        $(document).ready(function(){
            $(".ani").hover(
                function(){
                    console.log("in");
                    $(this).addClass("panel-primary");
                    $(this).removeClass("panel-default");
                },
                function(){
                    $(this).addClass("panel-default");
                    $(this).removeClass("panel-primary");
                })
        });

    </script>
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
    <div class="container add_drop">
        <div class="row" id= "bd">
            <img src="images/bgteam.jpg" width="100%" class="">
        </div>
            <div class="row panel panel-default ani" >
                <div class="col-md-4 panel-heading">
                    <img src="images/hfk.jpg" width="300" height="300" class="center-block">
                </div>
                <div class="col-md-8 ">
                    <h1 class="text-uppercase">Fazeel Kamran</h1>
                    <h4 class="text-capitalize">Fron End Developer</h4>
                    <blockquote class="text-center">
                        <p>
                            "Keep your dreams alive. Understand to achieve anything requires faith and belief in yourself, vision, hard work, determination, and dedication. Remember all things are possible for those who believe".
                        </p>
                    </blockquote>
                </div>

            </div>
            <div class="row panel panel-default ani">
                
                <div class="col-md-8">
                    <h1 class="text-uppercase">Abdul Moeed</h1>
                    <h4 class="text-capitalize ">FULL STACK DEVELOPER</h4>
                    <blockquote class="text-center">
                        <p>"To be a champion, I think you have to see the big picture. It's not about winning and losing; it's about every day hard work and about thriving on a challenge. It's about embracing the pain that you'll experience at the end of a race and not being afraid. I think people think too hard and get afraid of a certain challenge".
                        </p>
                    </blockquote>
                </div>
                <div class="col-md-4 panel-heading">
                    <img src="images/am.jpg" width="300" height="300" class="center-block">
                </div>
            </div>
            <div class="row panel panel-default ani">
                <div class="col-md-4 panel-heading">
                    <img src="images/fb.jpg" width="300" height="300" class="center-block">
                </div>
                <div class="col-md-8 ">
                    <h1 class="text-uppercase">Furqan Butt</h1>
                    <h4 class="text-capitalize">Back End Developer</h4>
                    <blockquote class="text-center">
                        <p>
                            "The price of success is hard work, dedication to the job at hand, and the determination that whether we win or lose, we have applied the best of ourselves to the task at hand".
                        </p>
                    </blockquote>
                </div>
            </div>
            <div class="row panel panel-default ani">
                <div class="col-md-8 ">
                    <h1 class="text-uppercase">Syed Raza Abbas</h1>
                    <h4 class="text-capitalize">FULL STACK DEVELOPER</h4>
                    <blockquote class="text-center">
                        <p>"Success is no accident. It is hard work, perseverance, learning, studying, sacrifice and most of all, love of what you are doing or learning to do".
                        </p>
                    </blockquote>
                </div>
                <div class="col-md-4 panel-heading">
                    <img src="images/sra.jpg" width="300" height="300" class="center-block">
                </div>
            </div>
        </div>
    
   <?php include 'footer.php'; ?>
    <!-- Modal LogIN -->
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
