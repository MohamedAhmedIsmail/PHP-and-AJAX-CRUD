<?php
  $host_name="localhost";
  $host_user="root";
  $host_pass="";
  $host_db="ajax";
  $connect= mysqli_connect($host_name,$host_user,$host_pass)or exit("Error: Not connected to the DB <br>");
  if(isset($connect))
  {
    
    if(isset($host_db))
    {
      $connect_db=mysqli_select_db($connect,'ajax')or exit("DB does not exists <br>");
    }
  }
  else
  {
    echo"<p>Erro2: There is a problem connecting to the db!<br></p>";
  }
?>