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
        <?php 
                while($d = mysqli_fetch_assoc($data["db"])){
            ?>
        <form action="http://localhost/5th%20BRIEF/public/Admin/updateto/<?= $d['id'] ?>" method="POST" enctype="multipart/form-data" class="mx-auto" style="width:400px;">
            <h2>Update Your destination</h2>
           
            <?php
            if(isset($data['msg'])){
                echo '<span class=" text-danger">'.$data['msg'].'</span>';     
            }
            if(isset($data['message'])){
                echo '<span class="text-success">'.$data['message'].'</span>'; 
            }
             ?> 
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">destination</label>
                <input type="text" value="<?= $d['destination'] ?>" name="dest" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">description</label>
                <input type="text" value="<?= $d['description'] ?>" name="desc" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">price</label>
                <input type="text" value="<?= $d['price'] ?>" name="price" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">choose the picture of your destination</label>
                <input type="file" name="image" class="form-control" id="exampleInputPassword1">
            </div>
           
            <button type="submit" name="submit" class="btn btn-primary">Update Your Destination</button>
           
        </form>
        <?php }; ?>
    </div>

</body>

</html>