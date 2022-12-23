<?php
if(!isset($_SESSION["login"])){
    header("Location:http://localhost/5th%20BRIEF/public/home/index");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="http://localhost/5th%20BRIEF/public/product/addProduct" method="POST" enctype="multipart/form-data" class="mx-auto" style="width:400px;">
            <h1>add new destination</h1>
           
            <?php
            if(isset($data['msg'])){
                echo '<span class=" text-danger">'.$data['msg'].'</span>';     
            }
            if(isset($data['message'])){
                echo '<span class="text-success">'.$data['message'].'</span>'; 
            }

             ?> 
            <div class="mb-3">
                <input type="text" name="dest" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">description</label>
                <input type="text" name="desc" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">price</label>
                <input type="text" name="price" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">choose the picture of your destination</label>
                <input type="file" name="image" class="form-control" id="exampleInputPassword1">
            </div>
           
            <button type="submit" name="submit" class="btn btn-primary">Add Your new Destination</button> <br> <br>
            <a class="btn btn-danger" href="http://localhost/5th%20BRIEF/public/Admin/crud">back to dashboard</a>
        </form>
    </div>

</body>

</html>