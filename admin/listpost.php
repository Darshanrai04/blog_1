<?php
include('../includes/db.php');

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
<?php include("./includes/nav.php");
$sql=$mysqli->query("SELECT * FROM `add_post` where title is not null and title <>'' ");
?>
<table class="table table-striped table-borderd">
 <tr><th>id</th><th>title</th><th>content</th><th>category</th><th>thumbnail</th><th>user_id</th></tr>
 <?php while($row=$sql->fetch_array()){ ?>
 <tr>
<td><?php echo $row['id'] ?></td>
<td><?php echo $row['title'] ?> </td>
<td><?php echo $row['content'] ?></td>
<td><?php echo $row['category'] ?></td>
<td><?php echo $row['thumbnail'] ?></td>
<td><?php echo get_user_name($mysqli,$row['user_id']) ?></td>
 </tr>
 
 <?php } ?>
</table>




<?php include("../includes/script.php");?>
</body>

</html>
C:\xampp\htdocs\darshan file git\blog_1\admin\listpost.php