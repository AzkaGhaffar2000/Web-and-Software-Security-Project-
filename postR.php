<?php
        include("ConnectNatureDB.php");
?>
<?php

            $username=$_POST["username"];
            $username = $conn->real_escape_string($username);
			$password=$_POST["password"];
            $password = $conn->real_escape_string($password);
            $aType=$_POST["aType"];   
            $aType = $conn->real_escape_string($aType);

            $sql = "INSERT INTO account (`username`,`password`, `aType`) 
            VALUES ('$username', '$password', '$aType')";
            
            $res = $conn->query($sql) or die('Error: could not run query: '.$conn->error);
            echo "<h2 style='text-align:center'>Registered<h2>";
            $conn->close();
            header("Location:admin.php");
            
        
        ?>