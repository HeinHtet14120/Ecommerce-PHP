<?php

include 'connection.php';
$id = $_POST['id'];
$name = $_POST['name'];
$cat = $_POST['category'];
$price =$_POST['price'];
$des = $_POST['description'];
$oldimg = $_POST['oldiimg'];
$newimg =$_FILES['newimg']['name'];

if($newimg !=""){
    $updatephoto = $newimg;
    move_uploaded_file($_FILES['newimg']['tmp_name'], "AddDataImages/".$newimg);
}
else{
    $updatephoto=$oldimg;
}

$sql = $db->prepare("UPDATE item SET Iid='$id', name='$name', category='$cat', price='$price', description='$des', image='$updatephoto' WHERE Iid='$id'");
$sql->execute();

header('Location: viewdata.php');