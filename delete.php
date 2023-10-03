<?php

include 'connection.php';
$did = $_GET['did'];

$sql = $db->prepare("DELETE FROM item WHERE Iid='$did'");
$sql->execute();

$sql_details = $db->prepare("DELETE FROM moredetails WHERE id='$did'");
$sql_details->execute();


header('Location: viewdata.php');