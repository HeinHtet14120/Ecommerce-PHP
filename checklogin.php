<?php
session_start();
include 'connection.php';
$thisemail = $_POST['email'];
$pwd = $_POST['password'];
$_SESSION['uemail']=$_POST['email'];
if($thisemail=="heinhtet14120@gmail.com" and $pwd=='hh1414'){
    header('Location:main.php');
}else{ 
    $userEmail=$db->prepare("SELECT * FROM user");
    $userEmail->execute();
    $getdata = array();
    while($row = $userEmail->fetch(PDO::FETCH_ASSOC)) {
       extract($row);
       array_push($getdata,$email);       
    }
    if(in_array($thisemail,$getdata)){  
       try{
          $sql= "SELECT * FROM user WHERE email = '$thisemail'";
          $sql=$db->prepare($sql);
          $sql->execute();
          while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
             extract($row);
                $userData = array('email' => $email, 'password' => $password_hash);
                $password = $userData['password'];
                $_SESSION['uname']=$name;
                if(password_verify($_POST['password'],$password)){
                   echo "login successful";
                   header('Location:home.php');
                }else{
                   echo "wrong password";
                   header('Location:login.php');
                }  
             }
             echo"<pre>";
             print_r($userData);  
       }catch(PDOException $e){
          $e->getMessage();
       }  
    } 
    else{
       echo "User is not signed up.";
       // header('Location:login.php');
    } 
    // header("Location: login.php");
}







