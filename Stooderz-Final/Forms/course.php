<!DOCTYPE html PUBLIC>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>STOODERZ - Learn today Lead Tomorrow</title>
        <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/basic.css">
        <script src="../js/jQuery/jquery.min.js"></script>
        <script src="../css/bootstrap/js/bootstrap.min.js"></script>
        
        <script src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
        <script src="remaining-validation.js"></script>
        
    </head>
    <body>

    <?php 
     session_start();
     require'../connection.php';
     require'../utlities.php';
     //include"../navbar2.php";

     //$message="you need to login first";

    if (!loggedIn()) {

        header('location:../Home.php');
    }else{
        
    }

     ?>
        <div class ="container" >
            <div class="row">
            <div class="col-sm-6 col-sm-offset-3 ">
                <form method="post" action="insert_course.php" class= "form-group panel panel-primary" style="margin-top: 25%">
                    <h1 class= "panel-heading">POST A COURSE</h1>
                    <div class="form-body">
                    <div class="form-group">
                    <input type="Reset" name="Reset"  class="btn btn-danger"> 
                    </div>
                    <div class="form-group">
                        <label>Course</label>
                        <div class="input-group">
                    <input type="text" name="course" required placeholder="Course Title " class="form-control"><div class="input-group-addon">*</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <textarea name="description" required placeholder="Description" class="form-control"></textarea><div class="input-group-addon">*</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                    <input type="number" name="price" required placeholder="Price in PKR" class="form-control"><div class="input-group-addon">*</div>
                        </div>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="agreement" required >*
                        Yes, I understand and agree to the Foster Terms of Service, including the <a>User Agreement and Privacy Policy.</a>
                            </label>
                    </div>
                        
                    </div>
                    <div class="panel-footer">
                    <input type="Submit" name="Submit" class="btn btn-success">
                    <p>* is a required field Kindly fill those carefully    </p>
                    </div>
                </form>
                
                
            </div>
        </div>
        </div>
    </body>
</html>
