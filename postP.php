<?php
    include("ConnectNatureDB.php");
?>
<?php
	session_start();
  	  	$msg= '';
		if (isset($_POST['username'])&& isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = $conn->real_escape_string($username);
        $password = $conn->real_escape_string($password);
        
		$result = $conn->query("UPDATE account SET username='".$username."',  password='".$password."'");
		if($result->num_rows){
			$rows = $result->fetch_assoc();
			$_SESSION['AccID'] = $rows['AccID'];
			$loginType = $rows['aType'];
		}else {
			$msg= 'Invalid password';
		}
		
	$conn->close();
		
}

	 if (isset($_SESSION['AccID'])){
        if ($loginType == 0) {
            header("Location:user.php");
        }
       
        else if ($loginType == 1){
            header("Location:admin.php");
        }
    else {
        if ($username != ""){
            echo "<span style='color:red'>LOGIN FAILURE:  ".$username." is not an authorized user.</span><br>\n";
        }
        else {
            echo "";
        }
    } 
    } 
    
?>
