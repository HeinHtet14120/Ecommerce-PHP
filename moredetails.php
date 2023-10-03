<?php
include 'connection.php';

$lid = $_GET['mid'];

$sql_m = $db-> prepare("SELECT * FROM item WHERE Iid=$lid" );
$sql_m -> execute();
$outputs=$sql_m->fetchAll(PDO::FETCH_OBJ);
// echo "<pre>";
// print_r($outputs) ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More Details Info Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <style>
        .container{
            margin: auto;
            padding: 40px 0px;
            width: 45%;
        }
    </style>
</head>
<body>
    <h1>Product Details</h1>
    <br>
        <div class="container">
            <form action="moredetails-process.php?mid=<?= $lid;?>" method="POST" enctype="multipart/form-data">
            <?php foreach($outputs as $output){ ?>
            <div class="input-group mb-3" style="margin-bottom:0px;">
            <span class="input-group-text" id="basic-addon1">ID</span>
            <input type="text" class="form-control" aria-label="Username" name="id" aria-describedby="basic-addon1" value="<?= $output -> Iid;?>" disabled>
            </div>
            
            <div class="input-group mb-3" style="margin-bottom:0px;">
            <span class="input-group-text" id="basic-addon1">Product Name</span>
            <input type="text" class="form-control" aria-label="Username" name="pname" aria-describedby="basic-addon1" value="<?= $output -> name; ?>" disabled>
            </div>
            <?php } ?>
            <div class="input-group mb-3" style="margin-bottom:0px;">
            <span class="input-group-text" id="basic-addon1">Artist Name</span>
            <input type="text" class="form-control" aria-label="Username" name="artist" aria-describedby="basic-addon1">
            </div>
            <div class="input-group" style="margin-bottom:20px;">
            <span class="input-group-text">Description</span>
            <textarea class="form-control" aria-label="With textarea" name="description"></textarea>
            </div>
            <div class="input-group mb-3" style="margin-bottom:0px;">
            <span class="input-group-text" id="basic-addon1">Released Year</span>
            <input type="text" class="form-control" aria-label="Username" placeholder="" name="date" aria-describedby="basic-addon1">
            </div>
            <div class="mb-3" style="margin-bottom:0px;">
            <input class="form-control" placeholder="Image1" type="file" id="formFile" name="image1">
            </div>
            <div class="mb-3" style="margin-bottom:0px;">
            <input class="form-control" placeholder="Image2" type="file" id="formFile" name="image2">
            </div>
            <div class="mb-3" style="margin-bottom:0px;">
            <input class="form-control" placeholder="Image3" type="file" id="formFile" name="image3">
            </div>
            <div class="col-auto" style="margin-bottom:0px;">
                <button type="submit" name="submit" class="btn btn-primary mb-3" style="background-color:white; color:black;">Submit</button>
            </div>
            </form>
           
        </div>
        

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>




