
<?php 
session_start();
require'connection.php';
   
    if(isset($_POST['Submit']) and !empty($_POST['Submit'])){
    $imageName=mysqli_real_escape_string($connection,$_FILES["image"]["name"]);
    $imageType=mysqli_real_escape_string($connection,$_FILES["image"]["type"]);
    $imageSize=mysqli_real_escape_string($connection,$_FILES["image"]["size"]);
    $imageData=$_FILES['image']['tmp_name'];
    
    $error=$_FILES["image"]["error"];

    $filePath="upload/".$imageName;
    move_uploaded_file($imageData,$filePath);

    $userEmail=$_SESSION['user'];
    $sql="UPDATE `images` SET `img_name`='$imageName',`img_path`='$filePath' WHERE `email`='$userEmail'";
    $result=mysqli_query($connection,$sql);

    if ($result) {
        $_SESSION['imgPath']=$filePath;
        //header('location: Sprofile Edit.php');
    
        if($_SESSION['userCategory']=="student"){
        header('location: Sprofile Edit.php');
    }else{
        header('location: Profile Edit.php');
    }
     /**/   
}else{
    echo "error";
} 
}

?>
