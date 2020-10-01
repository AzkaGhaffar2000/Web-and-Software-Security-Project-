<?php
        include("ConnectNatureDB.php");
?>
<?php

            $Name=$_POST["name"];
            $Name = $conn->real_escape_string($Name);
			$Email=$_POST["email"];
            $Email = $conn->real_escape_string($Email);
            $Website=$_POST["website"];   
            $Website = $conn->real_escape_string($Website);
			$Message=$_POST["message"];   
            $Message = $conn->real_escape_string($Message);
            
            $sql = "INSERT INTO comments (`name`,`email`, `website`, `message`) 
            VALUES ('$Name', '$Email', '$Website', '$Message')";
            
            $res = $conn->query($sql) or die('Error: could not run query: '.$conn->error);
            echo "<h2 style='text-align:center'>Commented<h2>";
            $conn->close();
            header("Location:Ablog.php");
            
        
        ?>