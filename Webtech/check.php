<?php
	extract ($_POST);
	
	
	if($password!=$cpassword){
		echo '<script language="javascript">';
	echo 'alert("Password entered do not match")';
	echo '</script>';
	include("Signup1.php");
	die();
	}
	$conn = new mysqli("localhost","root","","mysql");
	if($conn->connect_error){
		die("connection unsuccessfull");}	
$sql = "SELECT email FROM wanderlust";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    		if($row["email"]==="$email"){
    			echo '<script language="javascript">';
				echo 'alert("Username already exists")';
				echo '</script>';
				include("Signup1.php");
				die();
    	}
    }
}

$sql = "INSERT INTO wanderlust (firstname, lastname, email, phone, password)
VALUES ('$FirstName', '$LastName', '$email', '$Phone', '$password')";

if ($conn->query($sql) === TRUE) {
    echo '<script language="javascript">';
	echo 'alert("Account successfully created")';
	echo '</script>';
	include("Login.html");
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	$conn->close();
?>