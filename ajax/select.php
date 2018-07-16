<?php
  include_once "connect.php";
  $get_memeber_info=mysqli_query($connect,"select * FROM members");
  if(mysqli_num_rows($get_memeber_info)>0)
  {
    while($row=mysqli_fetch_assoc($get_memeber_info))
    {
?>
    <tr>
        <td><?php echo $row['fname'];?></td>
        <td><?php echo $row['lname'];?></td>
        <td><?php echo $row['phone'];?></td>
        <td><?php echo $row['job'];?></td>
        <td><a href="sample?del=<?php echo $row['ic'];?>"onclick="return deleteUser(<?php echo $row['ic'];?>)">X</a></td>
        <td><a href="sample?edit=<?php echo $row['ic'];?>">E</a></td>
    </tr>
<?php }
  }
  else
  {
    echo "<p>Sorry We Could not fetch your information</p>";
  }
?>
  
