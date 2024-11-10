

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
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Blog Title</label>
                        <input type="text" class="form-control" placeholder= "Enter Your Blog Title">
                        
                    </div>
                    <div class="col-md-12">
                        <label for="">Blog Content</label>
                        <textarea name="" id="content-editor" class="form-control "></textarea>  
                    </div>
                    <div class="col-md-4">
                        <label for="">Category</label>
                        <select name="" id="" class="form-select select2" multiple>
                            <option value="">Education</option>
                            <option value="">Travel</option>
                            <option value="">Food</option>
                            <option value="">Tech</option>
                        </select>
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