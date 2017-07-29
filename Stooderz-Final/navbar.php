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
            </div>
            <!-- Collection of nav links, forms, and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <form class="navbar-form" method="POST" id = "formUp" action="Search.php">
                <div class="input-group">
                    <input type="text" class="form-control" size="50" id="search" name="search" placeholder="Search...." required>
                    <div class="input-group-btn">
                        <input type="submit" value="Search" class="btn btn-primary">
                    </div>
                </div>
            </form>
                    </li>             
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">How It Works <b class="caret"></b></a>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="How Teacher.php">For Teachers</a></li>
                            <li><a href="hitwstudent.php">For Students</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="btn btn-link" data-toggle="modal" data-target="#singup">Sign UP</a></li>
                    <li><a href="#" class="btn btn-link" data-toggle="modal" data-target="#LOGIN ">Login</a></li>
                    <li><a href="Forms/course.php" class="btn btn-default">Post an AD</a></li>
                    <li>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                </ul>
            </div>
            <div class=" text-center">
            
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
 