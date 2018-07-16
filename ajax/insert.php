<?php
  include_once "connect.php";
  $firstName=$_POST['fname'];
  $lastName=$_POST['lname'];
  $phone=$_POST['phone'];
  $job=$_POST['job'];
 $_insert_members_info=mysqli_query($connect,"INSERT INTO members VALUES('','$firstName','$lastName','$phone','$job')");
 if(!$_insert_members_info)
 {
   echo "sorry you could not enter some info";
 }
 else
 {
   echo "inserted Data";
 }
?>