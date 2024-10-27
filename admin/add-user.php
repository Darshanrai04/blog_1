<?php
include('../includes/db.php');
if(!isset($_SESSION['user_id'])&&empty($_SESSION['user_id'])){
    header('location: index.php');
    exit;
}
// echo $_POST['name'];
if(isset($_POST['submit'])&&empty($_POST['edi'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];
    $about=$_POST['about'];
     $sql="INSERT INTO `user` (`id`, `name`, `email`, `phone`, `password`, `gender`, `about`) VALUES ('', '$name', '$email', '$phone', '$password', '$gender', '$about')";
    $query= mysqli_query($mysqli,$sql);
    if($query){
        echo "<script>alert('Register Success')</script>";
    }else{
        echo "<script>alert('Register Error')</script>";
    }

}
if(isset($_POST['edi'])&&!empty($_POST['edi'])){
$id=$_POST['edi'];
$name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];
    $about=$_POST['about'];
    $sql="UPDATE `user` SET `name` = '$name', `email` = '$email', `phone` = '$phone', `password` = '$password', `gender` = '$gender', `about` = '$about' WHERE `user`.`id` = '$id'";
    $query= mysqli_query($mysqli,$sql);
    if($query){
        echo "<script>alert('Update Success')</script>";
        header('location: list-user.php');

    }else{
        echo "<script>alert('Update Error')</script>";
    }
}
if(isset($_GET['eid'])){
    $id=$_GET['eid'];
     $sql= "SELECT * FROM `user` WHERE id='$id'";
    $query= mysqli_query($mysqli, $sql);
$fetch = mysqli_fetch_array($query);
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
<div class="row">
    <div class="col-md-12 d-flex justify-content-center p-3">
    <div class="card w-50  " >
    <div class="card-header">
        <h4> 
            Register/user form
        </h4>
    </div>


    <div class="card-body">
        <form method="POST">
            <input type="hidden" name="edi" value="<?php echo (isset($fetch['id']))?$fetch['id']:''  ?>">
            <div class="row g-3">
                <div class="col-md-12">
                    <label for="">
                        Name
                    </label>
                    <input type="text" name="name" id="name" class="form-control" value="<?php echo (isset($fetch['name']))?$fetch['name']:''  ?>">
                </div>
                <div class="col-md-12">
                    <label for="">
                        Email
                    </label>
                    <input type="text" name="email" id="email" class="form-control" value="<?php echo (isset($fetch['email']))?$fetch['email']:''  ?>">
                </div>
                <div class="col-md-12">
                    <label for="">
                        Phone
                    </label>
                    <input type="text" name="phone" id="phone" class="form-control" value="<?php echo (isset($fetch['phone']))?$fetch['phone']:''  ?>">
                </div>
                <div class="col-md-12"> 
                    <label for="">
                        Password
                    </label>
                    <input type="password" name="password" id="password" class="form-control" >
                </div>
                <div class="col-md-12">
                    <label for="">
                        Gender
                    </label>
                    <select name="gender" id="gender" class="form-select">
                        <option value="">Select Gender</option>
                        <option value="Male" <?php echo (isset($fetch['gender'])&&$fetch['gender']=='Male'?'selected':'') ?>>Male</option>
                        <option value="Female" <?php echo (isset($fetch['gender'])&&$fetch['gender']=='Female'?'selected':'') ?>>Female</option>
                        <option value="Others" <?php echo (isset($fetch['gender'])&&$fetch['gender']=='Others'?'selected':'') ?>>Others</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="">
                        About
                    </label>
                    <input type="text" name="about" id="about" class="form-control" value=" <?php echo (isset($fetch['about']))?$fetch['about']:''  ?>">
                </div>
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary" name="submit" id="submit" >Submit </button>
                </div>

            </div>
            
        
        </form>
    </div>
</div>

    </div>
</div>


<?php include("../includes/script.php");?>
</body>

</html>