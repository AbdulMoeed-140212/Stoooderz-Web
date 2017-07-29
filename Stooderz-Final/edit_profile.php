<?php
// include connection
session_start();
require 'connection.php';
//*****************
echo $result=$_SESSION['userCategory'];
echo $userEmail=$_SESSION['user'];
alert("called");
if(isset($_POST['colm']) && isset($_POST['value']))
{
    $colm = $_POST['colm'];
    $value = $_POST['value'];
    $table = "person";
    switch(colm)
    {
        case "First Name":
        $colm = "fname";
        break;
        case "Last Name":
        $colm = "lname";
        break;
        case "Institute":
        $colm = "institute";
        $table = "teacher";
        break;
        case "Current Class":
        $colm = "current_class";
        break;
        case "Phone":
        $colm = "mobile_no";
        break;
        case "Facebook ID":
        $colm = "facebook";
        break;
    }

    $sql = "UPDATE `".$result."` SET `".$colm."`=".$value.", WHERE `email`=".$userEmail.";";

    $exe = mysqli_query($connection,$sql);

    if($exe)
    {
        echo"Success";
    }
    else
    {
        echo "could not enter data";
    }

}
else
{
   echo "Failed"; 
}
?>