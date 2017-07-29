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
    <style>
        .popup{
            position: fixed;
            top:50px;
            margin:auto;
            left:50%;
            background-color: greenyellow;
            z-index:1000;
            padding: 10px;
            border-radius: 0px 0px 3px 3px;
            display: none;
        }
    </style>
</head>

<body>
<?php
session_start();
require 'connection.php';
require'utlities.php';


 if (loggedIn()){
    include 'navbar2.php';

    $sql="SELECT * FROM person WHERE `email`='$userEmail' ";
    $sql1="SELECT * FROM `student` WHERE `email`='$userEmail' ";
  
    $result=mysqli_fetch_array(mysqli_query($connection,$sql),MYSQLI_BOTH);
    $result1=mysqli_fetch_array(mysqli_query($connection,$sql1),MYSQLI_BOTH);
    
    }else{
        header('location:loginerror.php');
    }

 ?>
 
    <!-- Start-->
    <div class="container-fluid add_drop" style="margin: 10% 0 0 0">
        <div class="row">
            <div class=" col-xs-12 col-sm-2 col-md-2 panel panel-info">
                <div class="row panel-heading">
                    <blockquote>
                        <h3><?php echo ucfirst($result['fname']). " ". ucfirst($result['lname']) ; ?></h3>
                    </blockquote>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                       <img name="show"src="<?php echo $_SESSION['imgPath'];?>" alt="some img" width ="200px" height="250px">
                     </div>
                </div>

                <button class="btn btn-defult" id="edirbtn" name="edirbtn" data-toggle="modal" data-target="#upload">Edit</button>
            
            </div>
            <div class="col-md-10">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">About</a></li>
                    <li role="presentation"> <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">History</a></li>

                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="home">


                        <div class="panel panel-info">
                            <div class="panel-heading">About</div>
                            <div class="panel-body table-responsive">
                                <table class="table ">
                                    <tr>
                                        <th>First Name</th>
                                        <td><?php echo ucfirst($result['fname']); ?> </td>
                                        <td ><a class="btn btn-info edit-btn">Edit <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp;<a class='btn btn-success save-btn'>Save <i class='fa fa-floppy-o' aria-hidden='true'></i></a>&nbsp;<a class='btn btn-danger cancel-btn'>Cancel <i class='fa fa-ban' aria-hidden='true'></i></a></td>
                                    </tr>
                                    <tr>
                                        <th>Last Name</th>
                                        <td><?php echo ucfirst($result['lname']); ?> </td>
                                        <td ><a class="btn btn-info edit-btn">Edit <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp;<a class='btn btn-success save-btn'>Save <i class='fa fa-floppy-o' aria-hidden='true'></i></a>&nbsp;<a class='btn btn-danger cancel-btn'>Cancel <i class='fa fa-ban' aria-hidden='true'></i></a></td>
                                    </tr>
                                     <tr>
                                        <th>Institute</th>
                                        <td><?php echo ucfirst($result1['institute']); ?></td>
                                        <td ><a class="btn btn-info edit-btn">Edit <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp;<a class='btn btn-success save-btn'>Save <i class='fa fa-floppy-o' aria-hidden='true'></i></a>&nbsp;<a class='btn btn-danger cancel-btn'>Cancel <i class='fa fa-ban' aria-hidden='true'></i></a></td>
                                    </tr>
                                    <tr>
                                        <th>Current Class</th>  
                                        <td><?php echo ucfirst($result1['current_class']); ?></td>
                                        <td ><a class="btn btn-info edit-btn">Edit <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp;<a class='btn btn-success save-btn'>Save <i class='fa fa-floppy-o' aria-hidden='true'></i></a>&nbsp;<a class='btn btn-danger cancel-btn'>Cancel <i class='fa fa-ban' aria-hidden='true'></i></a></td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td>(+92) <?php echo ucfirst($result['mobile_no']); ?></td>
                                        <td ><a class="btn btn-info edit-btn">Edit <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp;<a class='btn btn-success save-btn'>Save <i class='fa fa-floppy-o' aria-hidden='true'></i></a>&nbsp;<a class='btn btn-danger cancel-btn'>Cancel <i class='fa fa-ban' aria-hidden='true'></i></a></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td><?php echo ($result['email']); ?></td>
                                        <td ><a class="btn btn-info edit-btn">Edit <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp;<a class='btn btn-success save-btn'>Save <i class='fa fa-floppy-o' aria-hidden='true'></i></a>&nbsp;<a class='btn btn-danger cancel-btn'>Cancel <i class='fa fa-ban' aria-hidden='true'></i></a></td>
                                    </tr>
                                    <tr>
                                        <th>Facebook ID</th>
                                        <td><?php echo ($result['facebook']); ?></td>
                                        <td ><a class="btn btn-info edit-btn">Edit <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp;<a class='btn btn-success save-btn'>Save <i class='fa fa-floppy-o' aria-hidden='true'></i></a>&nbsp;<a class='btn btn-danger cancel-btn'>Cancel <i class='fa fa-ban' aria-hidden='true'></i></a></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="panel-footer">&nbsp;</div>
                        </div>


                    </div>
                    
                    <div role="tabpanel" class="tab-pane fade" id="messages">

                        <div class="panel panel-info">
                            <div class="panel-heading">History</div>
                            <div class="panel-body">
                                <div class="panel panel-success">
                                    <div class="panel-heading"><i class="fa fa-calendar" aria-hidden="true"> 2016</i></div>
                                    <div class="panel-body">

                                        <div class="panel panel-default">
                                            <div class="panel panel-primary">
                                                <div class="panel-heading"><i class="fa fa-calendar" aria-hidden="true"> October</i></div>
                                            </div>
                                            <div class="panel-body">
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel panel-primary">
                                                <div class="panel-heading"><i class="fa fa-calendar" aria-hidden="true"> August</i></div>
                                            </div>
                                            <div class="panel-body">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">&nbsp;</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End-->

    <?php include'footer.php'; ?>

    <!-- Modal LogIN -->
    <div class="modal fade" id="LOGIN" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">LOG IN</h4>
                </div>
                <form method="post" action="Profile.html" name="signin">
                    <div class="modal-body">
                        <div class="form-group">
                            <lable for="email">Email</lable>
                            <input type="email" name="email" placeholder="Email ID" required class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <lable>Password</lable>
                            <input type="password" name="password" placeholder="Password" required class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="rememberMe" class="form-fields">
                            <lable for="rememberMe"> Remember me</lable>
                            <a href="#" class="btn btn-link">Forgot Password?</a>
                        </div>
                        <div class="form-group text-right">
                            <input type="Submit" name="Submit" value="Login" class="btn btn-primary" id="login">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="form-group text-center">
                            <label>Don't have an account ?&nbsp; </label><input data-toggle="modal" data-target="#singup" type="button" name="Signup" value="Create Account" class="btn btn-primary" data-dismiss="modal">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Signup -->
    <div class="modal fade" id="singup" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Sign Up</h4>
                </div>
                <form method="post" action="Profile .html" name="signin">
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
                            <input type="Submit" name="Submit" value="Create Account" class="btn btn-primary    " id="login">
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
    <div class="popup">
        Successful Saved
    </div>
    <!-- Profile Pic edit modal-->
    <div class="modal fade" id="upload" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Upload Picture</h4>
                </div>
                <form action="upload.php" method="post" name="upload" enctype="multipart/form-data" accept-charset="utf-8">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="file" name="image" id="pic" value="Browse" class="btn-file filebtn" accept="image/jpeg, image/png " required>
                            <div class="help-block">
                                <small>Select file less than 5MB (type .png .jpg )</small>
                            </div>
                            <div class="thumbnail">
                                <img id="uploadTemp" src="images/profile-default.jpg" width=100px height="100px">
                            </div>
                        </div>
                        <div style="text-align:center">
                            <input type="Submit" name="Submit" value="Upload" class="btn btn-primary" id="uploadit">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="form-group text-center">
                            <input type="button" align="center" name="cancel" id="cancel" value="Cancel" class="btn btn-danger" data-dismiss="modal">
                        </div>
                    </div>
                    <script>
                        var path= $("#ppic").attr("src");
                        $(".filebtn").on('change',function(){
                            var reader = new FileReader();
                                reader.onload = function(e) {
                                    // get loaded data and render thumbnail.
                                    $("#uploadTemp").attr("src",e.target.result);
                                    $("#show").attr("src",e.target.result) ;
                                };

                                reader.readAsDataURL(this.files[0]);
                        });
                        $("#cancel").click(function(){
                            $("#uploadTemp").attr("src",path) ; });
                        $("#edirbtn").click(function(){
                           $("#uploadTemp").attr("src",path); }); 
                        
                    </script>
                </form>
            </div>
        </div>   
    </div>
    <script>
        $(document).ready(
            function() {
                $(".hid-show").append("<i>xxxxxxxxxxxx</i> &nbsp;<span class='badge'><span class=\"glyphicon glyphicon-eye-open \" aria-hidden=\"true\"></span></span>").css("cursor", "pointer");
                $(".hid-show b").hide();
                $(".save-btn").hide();
                $(".cancel-btn").hide();
                $(".hid-show").click(
                    function() {
                        if ($(this).children(":first").is(":hidden")) {
                            $(this).children(":first").show();
                            $(this).children(":last").children(":first").removeClass("glyphicon-eye-open");
                            $(this).children(":last").children(":first").addClass("glyphicon-eye-close");
                            $(this).children(":nth-child(2)").hide();
                            $(this).css("-webkit-user-select", "all");
                        } else {
                            $(this).children(":first").hide();
                            $(this).children(":last").children(":first").addClass("glyphicon-eye-open");
                            $(this).children(":last").children(":first").removeClass("glyphicon-eye-close");
                            $(this).children(":nth-child(2)").show();
                            $(this).css("-webkit-user-select", "none");
                        }
                    }
                );
                $(".edit-btn").click(
                    function(){
                        $(this).hide();
                        $(this).siblings("a").show();
                        makeEditable($(this));
                    }
                );
                $(".cancel-btn").click(
                    function(){
                        $(this).hide();
                        $(this).siblings(".edit-btn").show();
                        $(this).siblings(".save-btn").hide();
                        resetall($(this));
                    }
                );
                $(".save-btn").click(
                    function(){
                        $(this).hide();
                        $(this).siblings(".edit-btn").show();
                        $(this).siblings(".cancel-btn").hide();
                        getvalue($(this));
                        popup();
                    }
                );
            }
        );
        
        function popup(){
            console.log("pop");
            $(".popup").fadeIn();
            setTimeout(function(){$(".popup").fadeOut();}, 1500);
        }
        function makeEditable(n){
            var current = n.parent().prev("td").text();
            var nameofcurrent = n.parent().prev("td").prev("th").text();
            console.log(nameofcurrent);
            var dataType="text";
            if(nameofcurrent.match("Date of Birth") )
                {
                    dataType = "date";
                    console.log(dataType);
                }
            else if(nameofcurrent.match("Phone"))
                {
                    dataType = "number";
                }
            else if(nameofcurrent.match("Password"))
                {
                    dataType="password";
                }
            n.parent().prev().html("<input type='"+dataType+"' value='"+current+"'>");
        }
        function getvalue(n){
            var data = n.parent().prev("td").children('input').val();
            
            console.log(data);
            n.parent().prev("td").html(data);
        }
        function resetall(n)
        {
            var nameofcurrent = n.parent().prev("td").children("input").val();
            n.parent().prev("td").html(nameofcurrent);
        }
    </script>
</body>

</html>
