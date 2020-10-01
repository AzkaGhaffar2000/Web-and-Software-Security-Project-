<?php
include("ConnectNatureDB.php");

$id = $_REQUEST['id'];
$delete="delete from contact WHERE NID=$id"; 

$result = $conn->query($delete) or die('Error:could not run query: '.$conn->error.$id);
header("Location: admin.php"); 
?>