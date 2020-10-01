<?php
include("ConnectNatureDB.php");

$id = $_REQUEST['id'];
$delete="delete from account WHERE AccID=$id"; 

$result = $conn->query($delete) or die('Error:could not run query: '.$conn->error.$id);
header("Location: account.php"); 
?>