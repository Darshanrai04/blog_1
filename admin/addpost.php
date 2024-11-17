<?php
include('../includes/db.php');
if(isset($_POST['submit'])){
    $title=$_POST["title"];
    $content=$_POST["content"];
    $category=$_POST["category"];
    // $thumbnail=$_POST["thumbnail"];

    // file upload things start

    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        // Get the file details
        $fileTmpPath = $_FILES['thumbnail']['tmp_name'];
        $fileName = $_FILES['thumbnail']['name'];
        $fileSize = $_FILES['thumbnail']['size'];
        $fileType = $_FILES['thumbnail']['type'];

        // Set a directory where the file will be uploaded
        $uploadDir = 'uploads/';

        // Make sure the uploads directory exists
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);  // Create the directory if it doesn't exist
        }

        // Generate a unique name for the uploaded file to avoid overwriting
        $uniqueFileName = uniqid() . '_' . basename($fileName);
        $uploadFilePath = $uploadDir . $uniqueFileName;

        // Validate the file type (optional)
        $allowedFileTypes = ['image/jpeg', 'image/png'];
        if (!in_array($fileType, $allowedFileTypes)) {
            echo "Error: Only JPG, PNG,  files are allowed.";
            exit;
        }

        // Check file size (optional, for example: 5MB max)
        if ($fileSize > 10 * 1024 * 1024) {
            echo "Error: File size is too large. Max allowed size is 10MB.";
            exit;
        }

        // Move the uploaded file to the target directory
        if (move_uploaded_file($fileTmpPath, $uploadFilePath)) {
            echo "File successfully uploaded: " . $uploadFilePath;
        } else {
            echo "Error: There was an issue with the file upload.";
        }
    } else {
        // echo "Error: " . $_FILES['thumbnail']['error'];
    }


    // file upload thing end
    $user_id=$_SESSION['user_id'];
$sqli="INSERT INTO `add_post` (`id`, `title`, `content`, `category`, `thumbnail`, `user_id`) VALUES ('', '$title', '$content', '$category', '$fileName ','$user_id')";
    $query= mysqli_query($mysqli,$sqli);


}


    



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("../includes/css.php");?>
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.3.1/ckeditor5.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>
<?php include("./includes/nav.php");?>
<div class="row">
    <div class="col-md-12 m-2">
    <div class="card">
            <div class="card-header">
                <h4>
                    Add Blog Post
                </h4>



            </div>
            <div class="card-body">
             <form action="" method= "POST">
                <div class="row g-3">
                    <div class="col-md-12">
                        <label for="title">Blog Title</label>
                        <input type="text" class="form-control" placeholder= "Enter Your Blog Title" name="title">
                        
                    </div>
                    <div class="col-md-12">
                        <label for="">Blog Content</label>
                        <textarea name="content" id="content-editor" class="form-control "></textarea>  
                    </div>
                    <div class="col-md-6">
                        <label for="">Category</label>
                        <select name="category" id="" class="form-select select2" multiple required>
                            <option value="Education">Education</option>
                            <option value="Travel">Travel</option>
                            <option value="Food">Food</option>
                            <option value="Tech">Tech</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                    <label for="">file name</label>
                    <input type="file" class="form-control" name="thumbnail">



                    </div>
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-success" name="submit">Submit</button>
                    </div>
                </div>
             </form>
                
            </div>



        </div>

    </div>
</div>


<?php include("../includes/script.php");?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    CKEDITOR.replace('content-editor');
    
    $(document).ready(function (){
        $('.select2').select2()
    })
</script>
</body>

</html>