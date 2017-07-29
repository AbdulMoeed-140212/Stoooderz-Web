
 <div id="preload" style=" width: 100%;
            height: 100%;
            position: fixed;
            top:0;
            left:0;
            z-index: 3000;
            background-color: #74AFAD;">
        <img src="Logo%20Animation%20.svg" width="200px" height="200px" style="position: absolute;
            top:50%;
            left:50%;
            margin-top: -100px;
            margin-left: -100px;">
    </div>
    <script>
        $(document).ready(
            function(){
                setTimeout(function() {
                    $("#preload").fadeOut();
                }, 800);
            }
        );
    </script>
<?php 

    $userEmail=$_SESSION['user'];

    $sql="SELECT * FROM `images` WHERE `email`='$userEmail'";
    $res=mysqli_query($connection,$sql);
    $row=mysqli_fetch_array($res,MYSQLI_BOTH);
    
    $_SESSION['imgPath']=$row['img_path'];
    $userEmail=$_SESSION['user'];

    $sql="SELECT `user_category` FROM `person` WHERE `email`='$userEmail'";
    $result=mysqli_fetch_array(mysqli_query($connection,$sql),MYSQLI_BOTH);
    
    $result= $result['user_category'];
    $_SESSION['userCategory']=$result;
    if ($result=='student'){
        $profileSelector= 'Sprofile.php';
        $profileEdit='Sprofile Edit.php';
    }else{
        $profileSelector= 'Profile.php';
        $profileEdit='Profile Edit.php';
    }

    $sql="SELECT `user_category` FROM `person` WHERE `email`='$userEmail'";
    $result=mysqli_fetch_array(mysqli_query($connection,$sql),MYSQLI_BOTH)['user_category'];

 ?>
    <div class="container-fluid">
        <nav role="navigation" class="navbar navbar-fixed-top navbar-inverse ">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                <a href="Home.php" class="navbar-brand">STOODERZ</a>
                <?php if(isset($_SESSION['userCategory'])){ ?>
                <a href="" class="navbar-text" title="">Logged in as <?php echo $result ?></a>  <?php } ?>
            </div>
            <!-- Collection of nav links, forms, and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden-xs">
                        <form class="form-inline" id="formUp" method="POST" action="Search.php" style="padding-top:8px;">
                            <div class="input-group">
                                <input type="text" class="form-control" size="50" id="search" name="search" placeholder="Search...." required>
                                <div class="input-group-btn">
                                    <input type="submit" value="Search" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </li>
                    <?php if ($result=='teacher') {
                    ?>
                    <li><a href="Forms/course.php" class="btn btn-default" style="margin-left: 15px;">Post an AD</a></li>
                    <?php }
                    ?>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Notificatons <b class="badge red">5</b><b class="caret"></b></a>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="#">Messages <b class="badge red">2</b></a></li>
                            <li><a href="#">Enroll Request <b class="badge red">3</b></a></li>
                        </ul>
                    </li>

                     <li class="dropdown">
                        <a class="fa fa-home" href="Home.php" style="font-size:30px;"></a>
                        
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#"><img src="<?php echo $_SESSION['imgPath'];  ?>" width="37px"  class="img-circle"> <b class="caret"></b></a>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="<?php echo $profileEdit ?>"><i class="fa fa-cog fa-lg" aria-hidden="true"></i> Settings</a></li>

                            <li> <a href="<?php echo $profileSelector; ?>"><b class="badge"><i class="fa fa-user" aria-hidden="true"></i></b> My Profile</a></li>
                            <li><a href="#"><b class="badge"><i class="fa  fa-question-circle" aria-hidden="true"></i></b> Help</a></li>
                            <li><a href="logout.php"><b class="badge"><i class="fa fa-sign-out" aria-hidden="true"></i></b> Log Out</a></li>
                        </ul>
                    </li>


                    <li>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                </ul>
            </div>
            <div class=" text-center visible-xs">
                <form class="form-inline" id="formUp" action="Search.php" style="padding-top:8px;">
                            <div class="input-group">
                                <input type="text" class="form-control" size="50" id="search" name="search" placeholder="Search...." required>
                                <div class="input-group-btn">
                                    <input type="submit" value="Search" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
            </div>
            <ol class="breadcrumb" style="background-color:#222;border:2px solid #333;color:#9d9d9d">
                   <li><a href="Home.php">Home</a></li>
  <li class="active">AboutUs</li>
</ol>
            <script>
                var url = window.location.href;
                url=url.split("/").pop();
                url=url.replace(".html"," ");
                url=url.replace(".php","");
                $("ol.breadcrumb li").last().text(url);
            </script>
        </nav>
    </div>
    