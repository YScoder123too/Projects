<?php 
  include("header.php");
?>
<h2>LOGIN</h2>
<form method="POST"action="category.php" enctype="multipart/form-data"><!--this can hide the info.-->
<input type="text" name="username">
<input type="password" name="password">
<input type="file" name="profile image">
<input type="submit">
</form>
<?php
include("footer.php");
?>