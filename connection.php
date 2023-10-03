<?php                              

try{
                                                //default username,password
    $db = new PDO("mysql:host=localhost;dbname=UNIBCEcom","root","");
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}catch(PDOException $e){       //silent, warning 
    echo $e->getMessage();
}


