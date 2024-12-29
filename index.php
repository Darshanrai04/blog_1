<?php include('includes/db.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('includes/css.php') ?> 

</head>
<body>

   <?php include('includes/nav.php') ?> 
   <div class="row g-3 p-2 ">
    <?php 
    $category=mysqli_query($mysqli,"SELECT * FROM `add_post` LIMIT 12");
    while($fetch= mysqli_fetch_array($category)){

    
    ?>
    <div class="col-md-3">
    <div class="card" style="width: 18rem;">
  <img src="<?php echo (!empty(trim($fetch['thumbnail']))?$fetch['thumbnail']:'assets\images\noimg.jfif') ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $fetch['title']?></h5>
    <p class="card-text" ><?php echo limit_title_words($fetch['content'] ,10)?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
   <?php }?>
   
</div>
    </div>
   </div>
    
   <?php include('includes/footer.php') ?> 
   <?php include('includes/script.php') ?> 

</body>

</html>