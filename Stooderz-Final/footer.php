<?php 
require 'connection.php';
$sql="SELECT Count(`user_teacher`) as teacher_count FROM teacher";
$sql1="SELECT Count(`user_student`) as student_count FROM student";

$result=mysqli_fetch_array(mysqli_query($connection,$sql),MYSQLI_BOTH);
$result1=mysqli_fetch_array(mysqli_query($connection,$sql1),MYSQLI_BOTH);

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 </head>
 <body>
 	<div class="container-fluid " style="margin: 6% 0 2% 0;">
        <div class="row hidden-xs">
            <div class="col-xs-12">
                    <table id="teacher_counter" class="table table-striped table-bordered text-center">
                        <tr>
                            <td><b><?php echo $result1['student_count']; ?></b></td>
                            <td><b><?php echo $result['teacher_count']; ?></b></td>
                        </tr>
                        <tr>
                            <td  title="Number of Registered Students"> <b>REGISTERED STUDENTS</b></td>
                            <td  title="Number of Registered Teachers"><b>REGISTERED TEACHERS</b></td>
                        </tr>
                    </table>
            </div>
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
                    <li title="Fill a Form to be a Part of This Community"><a href="How Teacher.php">Join as <b>Teacher</b></a></li>
                    <li title="Fill a Form to be a Part of This Community"><a href="hitwstudent.php">Join as <b>Student</b></a></li>
                    <li title="Meet The Team Behind This Idea"><a href="AboutUs.php">Team</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-3 panel-heading">
                <dl>BROWSE</dl>
                <ul class="list-unstyled  ">
                    <li title="Search Teachers by Country/Area"><a >Teacher by Country</a></li>
                    <li title="Search Teachers by Rating"><a>Teacher by Rating</a></li>
                    <li title="Search Teachers by Skills/Qualification"><a >Teacher by Skills</a></li>
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

 </body>
 </html>