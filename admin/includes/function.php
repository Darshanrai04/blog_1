<?php
 function get_user_name($mysqli,$id){
$user= mysqli_query($mysqli,"select * from user where  id='$id'");
$fetch= mysqli_fetch_array($user);
return $fetch['name'];

 }
 ?>