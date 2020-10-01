<?php
		include("ConnectNatureDB.php");
			$AccID=$_POST["AccID"];
            $username=$_POST["username"];
            $password=$_POST["password"];
            $aType=$_POST["aType"];

            $sql = "UPDATE account SET username='$username', password='$password', aType='$aType' WHERE AccID ='$AccID';";
            
            $res1 = $conn->query($sql) or die('Error: could not run query: '.$conn->error);
            echo "<h2 style='text-align:center'>Account Updated.<h2>";
            $conn->close();
            header("Location:account.php");
        ?>