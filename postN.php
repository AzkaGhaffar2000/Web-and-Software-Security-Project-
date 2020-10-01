<?php
        include("ConnectNatureDB.php");
?>
<?php

            $Name=$_POST["name"];
            $Name = $conn->real_escape_string($Name);
			$Email=$_POST["email"];
            $Email = $conn->real_escape_string($Email);
			$Message=$_POST["message"];   
            $Message = $conn->real_escape_string($Message);
            
            $sql = "INSERT INTO contact (`name`,`email`, `message`) 
            VALUES ('$Name', '$Email', '$Message')";
            
            $res = $conn->query($sql) or die('Error: could not run query: '.$conn->error);
            echo "<h2 style='text-align:center'>Request Recieved<h2>";
            $conn->close();
            header("Location:contactus.php");
            
        
        ?>