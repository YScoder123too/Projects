<?php 
  include("header.php");

  include("../config/config.php");

  //select

  if($conn->connect_error){
    echo"failed";
  }
  else{
    echo"pass";
  }


?>
<h2>CategoryManage</h2>
<form method="POST"action="category.php" enctype="multipart/form-data"><!--this can hide the info.-->
<input type="text" name="title">
<input type="text" name="description">
<input type="submit">
</form>


<?php
include("footer.php");
?>