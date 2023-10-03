<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<style>
  .formbold-btn {
    padding: 11px 10px;
    background-color: #050801;
    color: #03e9f4;
    border: none;
    border-radius: 10px;
    letter-spacing: 2px;
    overflow: hidden;
    transition: 0.5s;
    cursor: pointer;
    margin-top: 5px;
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


      @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
    body{
      background: -webkit-linear-gradient(left,#004548,#03e9f4);
      background: linear-gradient(to right, #004548,#03e9f4);
      font-family: "Inter", sans-serif;
    }
    section{
      margin: 50px;
    }

    table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(0,0,0,.5);
  border-radius: 10px;
  margin-bottom: 5px;
 }
.tbl-content{
  height:350px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(0,0,0,.5);
  border-radius: 10px;
}
.heading{
  box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
  border-radius: 10px;
}
th{
  padding: 20px 30px;
  text-align: center;
  font-size: 15px;
  color: #fff;
  font-weight: bold;
  text-transform: uppercase;
  
}
td{
  padding: 5px;
  text-align: center;
  vertical-align:middle;
  font-weight: 400;
  font-size: 15px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}
.imagebd{
  border-radius: 10px;
  padding-top: 3px;
  position: relative;
  box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px;

}

.img1{
  /* padding-left: 77px; */
}

.img2{
  /* padding-right: 80px; */
}

.edit-button{
  width: 100px;
}
  
</style>
<body>
    <?php
    include 'connection.php';
    $sql = $db -> prepare("SELECT * FROM item");
        $sql -> execute();
    
        ?>
        
        <div class="tbl-header">
          <table cellpadding="0" cellspacing="0" border="0">
            <thead>
            <tr class="heading">
                   <th>Name</th> 
                   <th>Price</th>
                   <th>Category</th>
                   <th>Description </th>
                   <th>Image</th>
                   <th></th>
                   <th></th>
                </tr> 

            </thead>

          </table>
        </div>
        <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
        <tbody>

        <?php
                 while ($row=$sql-> fetch(PDO::FETCH_ASSOC)){
                    extract($row);
                ?>  
                <tr class="table-row">
                    <td ><?= $name;?></td>
                    <td ><?= $price;?></td>
                    <td ><?= $category;?></td>
                    <td ><?= $description;?></td>
                    <td ><img src="AddDataImages/<?= $image;?>" height="100" width="100" class="imagebd"></td>
                    <td class="edit-button"><a href="update.php?uid=<?php echo $Iid;?>" class="img1"><img src="./AddDataImages/edit-icon-removebg-preview.png" alt="" width="23px" height="24px" ></a></td>
                    <td class="edit-button"><a href="delete.php?did=<?= $Iid;?>" class="img2"><img src="./AddDataImages/trash-can-icon-png-19.png" alt="" width="30px" height="29px"  ></td>
                    <td class="edit-button"><a href="moredetails.php?mid=<?= $Iid;?>" class="img2"><img src="./AddDataImages/settings.png" alt="" width="30px" height="29px" ></td>
                </tr>
        <?php   
        }
?>
        </tbody>
        </table>
        </div>
        

        <form action="main.php" >
        <input type="submit" value="Back" class="formbold-btn" >
        </form>
</body>
</html>