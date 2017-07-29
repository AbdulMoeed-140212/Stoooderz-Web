
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

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
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
include 'insert_student.php';
?>
    <div class="container add_drop">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 panel panel-primary">
                <h1 class="panel-heading"> STUDENT REGISTRATION</h1>
                <form method="post" action="" name="studentregist" class="form-horizontal panel-body">
                    <div ng-app="">
                            <div class="form-group">
								<label>First Name</label>
                                <div class="input-group">
                                    <input type="text" name="firstname" id="firstname" ng-model="firstname" placeholder="First Name" required class=" alphaonly form-control">
                                    <div class="input-group-addon">*</div>
                                </div>
                            </div>
                        
                            </b></h3>
                            <div class="form-group">
							<label>Last Name</label>
                                <div class="input-group">
                                    <input type="text" name="lastname" placeholder="Last Name" required class="alphaonly form-control">
                                    <div class="input-group-addon">*</div>
                                </div>
                            </div>
                  
                            <div class="form-group">
								<label>Institute</label>
                                <div class="input-group">
                                <input type="text" name="institute" placeholder="Institute" class="form-fields form-control">
                                    <div class="input-group-addon">*</div>
                                </div>
                            </div>
							<div class="form-group">
							<label>Current Class</label>
                            <div class="radio">
								
                                <div>
                                    <label><input type="radio" name="cclass" value="primary" checked> Primary School (Class 1-5)</label>
                                </div>
                                <div>
                                    <label><input type="radio" name="cclass" value="middle"> Middle School (Class 6-8)</label>
                                </div>
                                <div>
                                    <label><input type="radio" name="cclass" value="matric"> Matriculation</label>
                                </div>
                                <div>
                                    <label><input type="radio" name="cclass" value="olevel"> Ordinary Level (O-Level)</label>
                                </div>
                                <div>
                                    <label><input type="radio" name="cclass" value="inter"> Intermediate</label>
                                </div>
                                <div>
                                    <label><input type="radio" name="cclass" value="alevel"> Advanced Level (A-Level)</label>
                                </div>
                                <div>
                                    <label><input type="radio" name="cclass" value="ug"> Undergraduate</label>
                                </div>
                                <div>
                                    <label><input type="radio" name="cclass" value="pg"> Postgraduate</label>
                                </div>
                                <div>
                                    <label><input type="radio" name="cclass" value="diploma"> Diploma Holder</label>
                                </div>
                            </div>
							</div>
                            <div class="form-group">
								<label>Phone Number</label>
                                <div class="input-group">
                                    <input type="number" name="mobile" placeholder="Mobile Number" required class="numonly form-control">
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
                                <datalist name="City" id="City"></datalist>
                            </div>
                            <div class="panel panel-default text-center">
                                
                                <div class="panel-body">By submitting, you agree and confirm to the Stooderz Terms of Service, including the User Agreement and Privacy Policy.</div>
								<input type="Submit" name="Submit" class="btn btn-success">
                            </div>
                </form>
            </div>
        </div>
    </div>

    
</body>

</html>
