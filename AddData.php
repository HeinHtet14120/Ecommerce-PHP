<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
  * {
    margin: 0;
    padding: 6px;
    box-sizing: border-box;
  }
  body {
    font-family: "Inter", sans-serif;
    background: #004548;
  }
  .formbold-main-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 80px;
    
  }

  .formbold-form-wrapper {
    margin: 0 auto;
    max-width: 550px;
    width: 100%;
    background:#fff;
    padding: 20px;
    border: 1px solid #00546C;
    box-shadow: 0 15px 25px rgba(0,0,0,.6);
    border-radius: 20px;
  }

  .formbold-input-flex {
    display: flex;
    gap: 20px;
    margin-bottom: 22px;
  }
  .formbold-input-flex > div {
    width: 100%;
    display: flex;
    flex-direction: column-reverse;
  }

  .formbold-form-wrapper .formbold-input-flex input{
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #050801;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #050801;
  outline: none;
  background: transparent;
  caret-color: #050801;
  }
  .formbold-form-wrapper .formbold-input-flex label {

    position: relative;
    padding: -10px;
    font-size: 17px;
    font-style: bold;
    color: black;
    pointer-events: none;
    transition: .8s;
  }

  .formbold-textarea label{
    position: absolute;
    font-size: 16px;
    color: black;
    pointer-events: none;
    transition: .8s;
    border: 2px solid black;
  }
  .formbold-textarea {
    display: flex;
    flex-direction: column-reverse;
    font-family: "Inter", sans-serif;
    
  }

  .formbold-filename-wrapper {
    display: flex;
    flex-direction: column;
    gap: 6px;
    margin-bottom: 22px;
  }
 
  .formbold-form-wrapper .formbold-input-flex input:focus ~label,
  .formbold-form-wrapper .formbold-input-flex input label:valid ~label,
  .formbold-form-wrapper .formbold-input-flex input:hover ~label{
    font-size:14px;
    font-weight: bold;
    color: linear-gradient(#141e30, #243b55);

  }


  .formbold-btn {
    padding: 15px 13px;
    background-color: #050801;
    color: #03e9f4;
    border: none;
    border-radius: 10px;
    letter-spacing: 5px;
    overflow: hidden;
    transition: 0.5s;
    cursor: pointer;
    margin-top: 20px;
    box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;
  }
  .formbold-btn:hover {
    background: #03e9f4;
    color: #050801;
    font-weight: bold;
    letter-spacing: 3.5px;
    box-shadow: 0 0 5px #03e9f4,
                0 0 25px #03e9f4,
                0 0 50px #03e9f4,
                0 0 200px #03e9f4;
     -webkit-box-reflect:below 1px linear-gradient(transparent, #0005);
     box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;
  }
  .file {
  margin-top: 20px;
  position: relative;
  display: flex;
  justify-content: left;
  align-items: center;
  }

  .file > input[type='file'] {
    display: none
  }

  .file > label {
    font-size: 10px;
    font-weight: 300;
    cursor: pointer;
    outline: 0;
    user-select: none;
    border-color: rgb(216, 216, 216) rgb(209, 209, 209) rgb(186, 186, 186);
    border-style: solid;
    border-radius: 4px;
    border-width: 1px;
    background-color: hsl(0, 0%, 100%);
    color: hsl(0, 0%, 29%);
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 10px;
    padding-bottom: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .file > label:hover {
    border-color: hsl(0, 0%, 21%);
  }

  .file > label:active {
    background-color: hsl(0, 0%, 96%);
  }


  .file--upload > label {
    color: hsl(204, 86%, 53%);
    border-color: hsl(204, 86%, 53%);
  }

  .file--upload > label:hover {
    border-color: hsl(204, 86%, 53%);
    background-color: hsl(204, 86%, 96%);
  }

  .file--upload > label:active {
    background-color: hsl(204, 86%, 91%);
  }

</style>
<body>
<div class="formbold-main-wrapper">
  <div class="formbold-form-wrapper">
    <form  method="POST" enctype="multipart/form-data">
        <div class="formbold-input-flex">
          <div>
              <input type="text" name="name" class="formbold-form-input" >
              <label > Name </label>
          </div>
        </div>
        <div class="formbold-input-flex">
          <div>
              <input type="text" name="category"  class="formbold-form-input" >
              <label > Category </label>
          </div>
          <div>
              <input type="number" name="price"  class="formbold-form-input"  >
              <label > Price </label>
          </div>
        </div>
        <div class="formbold-textarea">
            <textarea rows="6" name="description" placeholder="Description..." class="formbold-form-input"></textarea>
        </div>
        <div class="input-group mb-3">
          <input type="file" class="form-control" id="inputGroupFile01" name="img">
        </div>

        <input type="submit" name="submit" value="SUBMIT" class="formbold-btn">     
    </form>
  </div>
</div>

<?php 
include 'connection.php';

    $sql ="INSERT INTO item(name, category, price, description, image) VALUES(?,?,?,?,?)";
    $sq = $db -> prepare(($sql));

    if (isset($_POST['submit'])) {

        //File Check 
        if(isset($_FILES['img'])){
            $error= array();
    
            $filename = $_FILES['img']['name'];
            $filesize = $_FILES['img']['size'];
            $filetype = $_FILES['img']['type'];  //logo/jpg ae lo htwat lr
            $filetmp = $_FILES['img']['tmp_name']; //temporary name
    
            $file_ex= explode("/",$filetype);  //filetype sit chin loz "/" ko phat htote
            $fileCS= strtolower(end($file_ex));  //filename ko upper case to lower change
    
            $extension = array("jpg","png","jpeg","gif","jif","webp");
    
         //shar chin tae filename,arrayname 
            if (in_array($fileCS,$extension)==FALSE) {
                $error[]="File type is worng";  
            }
            elseif($filesize>2097152){
                $error[]="$ Yann Kyi Nay Tl Short Ohn Ha";
            }
            elseif(empty($error)==TRUE){
                move_uploaded_file($filetmp,"AddDataImages/".$filename );
            }
            
        }
        
        $name = $_POST['name'];
        $category = $_POST['category'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $image = $filename;

        if($sq -> execute(array($name,$category,$price,$description,$image))){
            echo "data inserted";
        }
    }

?>

<form action="main.php" >
  <input type="submit" value="Back" class="formbold-btn">
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>