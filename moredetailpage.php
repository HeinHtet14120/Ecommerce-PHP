<?php
include 'connection.php';


    $thisid = $_POST['id'];
    echo $thisid;

    try{
        $sql_details = $db -> prepare("SELECT * FROM moredetails WHERE id ='$thisid'");
        $sql_details -> execute();
        $row=$sql_details-> fetch(PDO::FETCH_ASSOC);
            extract($row);
?>
      <h3>Artist Name : <b><?= $artist;?></b></h3>
      <br>
      <img src="moredetails/<?= $image1;?>" alt="" width="300px" height="300px">
      <img src="moredetails/<?= $image2;?>" alt="" width="300px" height="300px">
      <img src="moredetails/<?= $image3;?>" alt="" width="300px" height="300px">
      
      <form action="home.php" href="#shoppingpage" >
        <input type="submit" value="Back" class="formbold-btn" >
      </form>
      

<?php
                    
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    

