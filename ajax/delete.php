<?php
  include_once "connect.php";
  $usersId=$_GET['usersId'];
  $_delete_members_info=mysqli_query($connect,"DELETE FROM members WHERE ic=$usersId");
  if(!$_delete_members_info)
  {
    echo"Sorry you could not delete this user";
  }
?>