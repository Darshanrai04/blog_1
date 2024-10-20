<?php
include('../includes/db.php');
if(!isset($_SESSION['user_id'])&&empty($_SESSION['user_id'])){
    header('location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("../includes/css.php");?>
</head>

<body>
<?php include("./includes/nav.php");?>
<table class="table table-striped table-borderd">
 <tr><th>id</th><th>name</th><th>email</th><th>gender</th><th>Action</th></tr>
 <?php
 $sql=$mysqli->query("SELECT * FROM `user`");
 while($row=$sql->fetch_array()){
 ?>
 <tr>
<td><?php echo $row['id'] ?></td>
<td><?php echo $row['name'] ?></td>
<td><?php echo $row['email'] ?></td>
<td><?php echo $row['gender'] ?></td>
<td><a href="" class="btn btn-info btn-sm ps-2">Edit</a> <a href="" class="btn btn-sm btn-danger"> Delete</a></td>
 </tr>
 <?php  }

?></table>




<?php include("../includes/script.php");?>
</body>

</html>