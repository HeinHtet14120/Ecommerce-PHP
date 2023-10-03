<?php
include 'connection.php';
session_start();
$username = $_SESSION['uname'];
$sql_user = $db -> prepare("SELECT * FROM user WHERE name = '$username'");
        $sql_user -> execute();
        $outputs=$sql_user->fetchAll(PDO::FETCH_OBJ);
        
        include 'header.php';       
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
<style>

        tr{
                display: inline-block;
        }

        th{
                display: block;
                margin: 10px;
                padding: 5px;
        }
        td{
                display: block;
                width: 200px;
                border: 1px solid grey;
                border-radius: 5px;
                margin: 10px;
                padding: 5px;
        }
        table{
                margin: auto;
        }
             
</style>
</head>
<body>
<h1>Account Information</h1>
<div class="container">
<table>
       <tr>
               <th>User-ID</th>
               <th>Name</th>
               <th>Email</th>
       </tr>
<?php
foreach($outputs as $output){
?>
       <tr>
       <td><?= $output -> uid; ?></td>
       <td><?= $output -> name; ?></td>
       <td><?= $output -> email;?></td>
       </tr>
       
</table>
</div>
<?php } ?>    
</body>
</html>
