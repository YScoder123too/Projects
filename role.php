<?php 
  include("../../config/config.php");//../ hai folder se bahar nikle kai liye
  //insert update delete==>call back file iss kaam ke liye aayegi
  if(isset($_POST['title']) && trim($_POST['title'])!='')//isset check karta hai ki ,trim-->extra wide space gaya
 {
    //insert
    $title=$_POST['title'];
    $description=$_POST['description'];

   $query="INSERT INTO `rol`(`name`,`description`) VALUES ('$title','$description')";
   
   $checkResult=$conn->query($query);
   if($checkResult){
    $_SESSION['status']="SUCCESS";//ek se dusri file pe leke jayega data ko
    header("location:../role.php");
    echo 'success';
    
   }
   else{
    $_SESSION['status']="FAIL";
    echo'fail';
    //header("location:../role.php");
   }
 }
?>