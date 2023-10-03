<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Process</title>
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
    
<?php
include 'connection.php';

$lid = $_GET['uid'];

$sql = $db->prepare("SELECT * FROM item WHERE Iid=$lid");
$sql-> execute();

$row=$sql->fetch(PDO::FETCH_ASSOC);
extract($row);
?>

<div class="formbold-main-wrapper">
  <div class="formbold-form-wrapper">
    <form action="updateprocess.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $Iid;?>">
        <div class="formbold-input-flex">
          <div>
              <input type="text" name="name" class="formbold-form-input" value="<?= $name?>" >
              <label > Name </label>
          </div>
        </div>
        <div class="formbold-input-flex">
          <div>
              <input type="text" name="category"  class="formbold-form-input" value="<?= $category?>" >
              <label > Category </label>
          </div>
          <div>
              <input type="number" name="price"  class="formbold-form-input" value="<?= $price?>" >
              <label > Price </label>
          </div>
        </div>
        <div class="formbold-textarea">
            <textarea rows="6" name="description" placeholder="Description..." class="formbold-form-input" value="<?=$description?>"></textarea>
        </div>
        
        <div class='file file--upload'>
        <label for='input-file'>
            Upload
        </label>
        <img src="AddDataimages/<?= $image;?>" width="100" height="100">
        <input type="hidden" name="oldimg" value="<?php echo $image ?>">
        <input type="file" name="newimg" id='input-file' value="<?php echo $image ?>"><br><br>
        </div>
        <input type="submit" name="submit" value="UPDATE" class="formbold-btn">     
    </form>
</body>
</html>
