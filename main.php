<?php
session_start();
$_SESSION['uname']="Admin";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Main Page</title>
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Bungee&display=swap');
html {
  height: 100%;
}
body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  background: #004548;
}

h1{
  position: absolute;
  left: 36%;
  color: #03e9f4;
  font-family: 'Bungee', cursive;
}
.login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 313px;
  padding: 0px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}
.login-box .user-box {
  position: relative;
}
.noselect{
  padding: 15px 13px;
  background-color: #050801;
  color: #03e9f4;
  border: none;
  border-radius: 10px;
  letter-spacing: 5px;
  overflow: hidden;
  transition: 0.5s;
  cursor: pointer;
  margin: 30px;
  position: relative;
  left: 20%;
  box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;
}

.noselect:hover{
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



</style>
<body>
  <h1 class="animate__animated animate__backInDown">Welcome Admin!</h1>
    <?php
    include "connection.php";
    ?>
    <div class="login-box">
        <div class="user-box">
            <form action="AddData.php" >
                <input type="submit" value="ADD DATA" class="noselect" >
            </form>
        </div>
        <div class="user-box">
            <form action="viewdata.php" method="POST">
            <input type="submit" value="View Data" name="gettv" class="noselect" >
            </form>
        </div>
        <div class="user-box">
            <form action="home.php" method="POST">
            <input type="submit" value="Home Page" name="gettv" class="noselect" >
            </form>
        </div>
    </div>
    
   

    
</body>
</html>