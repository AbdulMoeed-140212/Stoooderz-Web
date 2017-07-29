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

    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    <script src="account-validation.js"></script>
    <script>
        function fun() {
            $("#City").removeAttr("disabled");
            $("#City").attr("enabled", "enabled");
            $.getJSON("states.js", function(result) {
                var html = "";
                //checkCountry = array(3);
                checkProvince = ["Punjab", "Sindh", "KPK", "Balochistan", "Federal and Baltistan"];
                for (j = 0; j < checkProvince.length; j++)
                    if ($("#Province").val() == checkProvince[j]) {
                        var c = checkProvince[j];
                        for (i = 0; i < result[c].length; i++) {
                            html += "<option value = \"" + result[c][i] + "\" >" + result[c][i] + "</option>";
                        }
                        if ($("#City").html(html))
                            console.log("DOne");
                    }

            });
        }

    </script>
</head>

<body onload="fun();">

<?php

require'../connection.php';
include 'insert_teacher.php';

?>
<div class="container-fluid">
        <nav role="navigation" class="navbar navbar-fixed-top navbar-inverse ">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a href="#" class="navbar-brand">STOODERZ</a>
            </div>
            <div>
                
            </div>
        </nav>
    </div>
   
    <div class="container add_drop">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 panel panel-primary">
                <h1 class="panel-heading"> TEACHER REGISTRATION FORM</h1>
                <form method="post" action=""> <!--action="qualification.html"-->
                    <input type="Reset" name="Reset" class="btn btn-danger">
                    <div class="form-group">
                        <label>First Name</label>
                        <div class="input-group">
                            <input type="text" name="firstname" required placeholder="First Name" class="alphaonly form-control">
                            <div class="input-group-addon">*</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <div class="input-group">
                            <input type="text" name="lastname" required placeholder="Last Name" class="alphaonly form-control">
                            <div class="input-group-addon">*</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Gender</label>
                        <div class="radio">
                            <label><input type="radio" name="gender" value="male" checked> Male</label>
                            <label><input type="radio" name="gender" value="female"> Female</label>
                        </div>
                    </div>
					<label>CNIC</label>
					<div class="form-group ">
                        <div class="input-group">
                            <input input type="text" name="CNIC" required placeholder="xxxxx xxxxxxx x" class="numonly form-control" required>
                            <div class="input-group-addon">*</div>
                            </div>
                        </div>
                    <div class="form-group">
                        <label>Mobile Number</label>
                        <div class="input-group">
                            <input type="number" name="mobile" required placeholder="Mobile Number" class="numonly form-control">
                            <div class="input-group-addon">*</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Province">Province</label>
                        <select name="Province" id="Province" class="form-control" onchange="fun();">
                        <option value="Punjab" selected="selected">Punjab</option>
                        <option value="Sindh">Sindh</option>
                        <option value="KPK">Khyber Phaktunkhaw</option>
                        <option value="Balochistan">Balochistan</option>
                        <option value="Federal and Baltistan">Federal and Gilgit Baltistan</option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="City">City</label>
                        <input list="City" class="form-control">
                        <datalist name="City" id="City"> </datalist>
                    </div>
                    <div class="form-group">
                        <label>Facebook Profile</label>
                        <input type="text" name="fb" placeholder="Facebook Profile url" class="form-control">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="experience">Previous Experience</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="agreement" required> Yes, I understand and agree to the Foster Terms of Service, including the User Agreement and <a href="#">Privacy Policy</a>.</label>
                    </div>
                    <div class="panel-footer">
                        <input type="Submit" name="Submit" class="btn btn-primary" >
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function validateForm() {
            var valid = true;
            $('.form-field').each(function() {
                if ($(this).val() === '') {
                    valid = false;
                    return false;
                }
            });
            return valid
        }
        $("input").keyup(function(){
            console.log();
            if(validateForm())
                {
                    $("#Submt").addClass("btn-success");
                    $("#Submt").removeClass("btn-primary");
                }
        });
    </script>
</body>

</html>
