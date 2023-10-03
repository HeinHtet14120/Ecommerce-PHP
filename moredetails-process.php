<?php
include 'connection.php';

if(isset($_POST['submit'])){
   $id = $_GET['mid'];
   $artist = $_POST['artist'];
   $description = $_POST['description'];
   $date = $_POST['date'];
}
try{
    $sql_more ="INSERT INTO moredetails(id, artist, descriptions, released, image1, image2, image3) VALUES(?,?,?,?,?,?,?)";
    $sq = $db -> prepare(($sql_more));
    
    
    if(isset($_FILES['image1'])){
       $error= array();
    
       $filename1 = $_FILES['image1']['name'];
       $filesize= $_FILES['image1']['size'];
       $filetype= $_FILES['image1']['type'];  //logo/jpg ae lo htwat lr
       $filetmp= $_FILES['image1']['tmp_name']; //temporary name
    
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
           move_uploaded_file($filetmp,"moredetails/".$filename1 );
       }
       
    }
    
    if(isset($_FILES['image2'])){
       $error= array();
    
       $filename2 = $_FILES['image2']['name'];
       $filesize= $_FILES['image2']['size'];
       $filetype= $_FILES['image2']['type'];  //logo/jpg ae lo htwat lr
       $filetmp= $_FILES['image2']['tmp_name']; //temporary name
    
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
           move_uploaded_file($filetmp,"moredetails/".$filename2 );
       }
       
    }
    if(isset($_FILES['image3'])){
       $error= array();
    
       $filename3 = $_FILES['image3']['name'];
       $filesize = $_FILES['image3']['size'];
       $filetype = $_FILES['image3']['type'];  //logo/jpg ae lo htwat lr
       $filetmp = $_FILES['image3']['tmp_name']; //temporary name
    
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
           move_uploaded_file($filetmp,"moredetails/".$filename3 );
       }
       
    }
    $sq -> execute(array($id,$artist,$description,$date,$filename1,$filename2,$filename3));
    echo "Data inserted";
}catch(PDOException $e){
    echo $e->getMessage();
}
//database htal htae phon kyannn


