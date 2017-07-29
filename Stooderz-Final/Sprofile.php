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
        .red {
            background-color: crimson;
        }

    </style>
</head>

<body>

<?php
session_start();

require 'connection.php';
include 'utlities.php';

if(loggedIn()){

    include 'navbar2.php';

    $userEmail=$_SESSION['user'];

    $sql="SELECT * FROM person WHERE `email`='$userEmail' ";
    $sql1="SELECT * FROM `student` WHERE `email`='$userEmail' ";
  
    $result=mysqli_fetch_array(mysqli_query($connection,$sql),MYSQLI_BOTH);
    $result1=mysqli_fetch_array(mysqli_query($connection,$sql1),MYSQLI_BOTH);
    
}else{
    echo"login to view this page";
    header('location:loginerror.php');
}

?>
    <!-- Start-->
    <div class="container-fluid add_drop" style="margin: 10% 0 0 0">
        <div class="row">
            <div class=" col-xs-12 col-sm-2 col-md-2 panel panel-info">
                <div class="row panel-heading">
                    <blockquote>
                        <h3> <?php echo ucfirst($result['fname']). " ". ucfirst($result['lname']) ; ?> </h3>
                    </blockquote>
                </div>
                <div class="row">
                    <div class="col-xs-12">

                    <img src="<?php echo $_SESSION['imgPath']; ?>" alt="some img" width ="200px" height="250px">
                    </div>
                </div>

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
                                <table class="table">
                                    <tr>
                                        <th>First Name</th>
                                        <td> <?php echo ucfirst($result['fname']); ?> </td>
                                    </tr>
                                    <tr>
                                        <th>Last Name</th>
                                        <td><?php echo ucfirst($result['lname']); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Gender</th>
                                        <td><b class="fa fa-mars" aria-hidden="true"></b> Male<?php //echo ucfirst($result['gender']); ?> </td>
                                    </tr>
                                    <tr>
                                    <tr>
                                        <th>Institute</th>
                                        <td><?php echo ucfirst($result1['institute']); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Current Class</th>
                                        <td><?php echo ucfirst($result1['current_class']); ?></td>
                                    </tr>
                                        <th>Address</th>
                                        <td><address>
                                        1355 Market Street, Suite 900 San Francisco, CA 94103 <abbr title="Phone">P:</abbr> (123) 456-7890
                                            </address>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td>(+92)<?php echo ucfirst($result['mobile_no']); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td><?php echo ($result['email']); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Facebook ID</th>
                                        <td><?php echo ($result['facebook']); ?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="panel-footer">&nbsp;</div>
                        </div>
                    </div
                    >
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

    <script>
        $(document).ready(
            function() {
                $(".hid-show").append("<i>xxxxxxxxxxxx</i> &nbsp;<span class='badge'><span class=\"glyphicon glyphicon-eye-open \" aria-hidden=\"true\"></span></span>").css("cursor", "pointer");
                $(".hid-show b").hide();

                $(".hid-show").click(
                    function() {
                        console.log("15sa");
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
            }
        );

    </script>
</body>

</html>
