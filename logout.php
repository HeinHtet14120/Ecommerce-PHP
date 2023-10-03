<?php
echo "logged out successfully";
if(isset($_SESSION['uemail'])){
$uiddata =$_SESSION['uemail'];
echo $uiddata;
}
session_start();
session_destroy();
?>
<br>
<!-- <a href="login.php">Login again</a> -->
<?php
header('Location:home.php');
?>
