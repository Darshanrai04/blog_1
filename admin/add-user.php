<?php
include('../includes/db.php');
if(!isset($_SESSION['user_id'])&&empty($_SESSION['user_id'])){
    header('location: index.php');
    exit;
}

if(isset($_post['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];
    $about=$_POST['about'];
    $sql="INSERT INTO `user` (`id`, `name`, `email`, `phone`, `password`, `gender`, `about`) VALUES ('', '$name', '$email', '$phone', '$password', '$gender', '$about')";
    $query= mysqli_query($mysqli,$sql);
    

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
            <div class="row g-3">
                <div class="col-md-12">
                    <label for="">
                        Name
                    </label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="col-md-12">
                    <label for="">
                        Email
                    </label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
                <div class="col-md-12">
                    <label for="">
                        Phone
                    </label>
                    <input type="text" name="phone" id="phone" class="form-control">
                </div>
                <div class="col-md-12"> 
                    <label for="">
                        Password
                    </label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="col-md-12">
                    <label for="">
                        Gender
                    </label>
                    <select name="gender" id="gender" class="form-select">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="">
                        About
                    </label>
                    <input type="text" name="about" id="about" class="form-control">
                </div>
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary" name="submit" id="submit" >Submit </button>
                </div>

            </div>
            <a href="" classs="" ></a>
        
        </form>
    </div>
</div>

    </div>
</div>


<?php include("../includes/script.php");?>
</body>

</html>