<?php
    session_start();
    unset($_SESSION['AccID']);
    session_destroy();
    header("Location:index.html");
?>

