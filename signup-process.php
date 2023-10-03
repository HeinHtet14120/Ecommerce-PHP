<?php
session_start();


if(empty($_POST["name"])){
    die ("Name is required.");
}

if(! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    die("Valid email is required");
}

if(! preg_match("/[a-z]/i",$_POST["password"])){
    die("Password must contain at least one letter.");
}

if(! preg_match("/[0-9]/i",$_POST["password"])){
    die("Password must contain at least one number.");
}

if($_POST["password"]!== $_POST["password_confirmation"]){
    die("Password must match");
}

$enpassword = password_hash($_POST['password'],PASSWORD_DEFAULT);
require 'connection.php';

$sql= "INSERT INTO user(name,email,password_hash)
       VALUE (?,?,?)";

if( ! $final = $db->prepare($sql)){
    die ("SQL error");
}

$_SESSION['uemail']=$_POST['email'];
$_SESSION['uname']=$_POST['name'];

try{
    $inputdata = array($_POST['name'],$_POST['email'],$enpassword);
    $final -> execute($inputdata);
    echo "Let's GOOOOOO";
    header('Location:home.php');
    exit;
}catch(PDOException $e){
    $e->getMessage(); 
    die( "Email already taken"); 
}


