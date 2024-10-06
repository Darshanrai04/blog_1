<?php include('../includes/db.php');
if (isset($_POST['submit'])){
$email=$_POST["email"];
$password=$_POST["password"];
$sqli=mysqli_query($mysqli,"SELECT * FROM `user` WHERE email='$email' AND password='$password'");
$count=mysqli_num_rows($sqli);

if($count>0){ //0 =false ,1
    echo "<script>alert('loged inn  Success')</script>";
    $fetch=mysqli_fetch_array($sqli);
    $_SESSION['username']=$fetch['name'];
    $_SESSION['user_id']=$fetch['id'];
    header('location: dashboard.php');
    exit;
}else{
    echo "<script>alert(' loged in Error')</script>";
}


   

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('../includes/css.php') ?> 
    
</head>
<body>
<form method="POST">
 <div class="row">
    <div class="col-md-12 d-flex justify-content-center p-4">
        <div class="card w-50">
            <div class="card-header">
                <h3>Login Form</h3>
            </div>
            <div class="card-body">
            <div class="row g-3">
<div class="col-md-12">
    <label for="">email</label>
    <input type="text" name="email" id="" class="form-control">


</div>
<div class="col-md-12">
    <label for="">Password</label>
    <input type="text" name="password" id="" class="form-control">

</div>
<div class="col-md-12 text-center  " >
    <button type= "submit" class="btn btn-info" name="submit" >submit</button>
</div>
    </div>
            </div>
        </div>
</div>
 </div>
<?php include('../includes/script.php') ?> 

</body>
</html>