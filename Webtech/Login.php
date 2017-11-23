<?php
	session_start();

	extract ($_POST);
	$conn = new mysqli("localhost","root","","mysql");
	if($conn->connect_error){
		die("connection unsuccessfull");}
	else
		//echo "successful connection"."<br/>";
	$pass=0;
	$sql = "SELECT email, password, firstname, lastname FROM wanderlust";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if ($row["password"]=="$password" and $row["email"]=="$Username"){
        	$pass=1;
        	//echo $row["email"];
        	$_SESSION["firstname"]=$row["firstname"];
        	$_SESSION["lastname"]=$row["lastname"];
        	$_SESSION["email"]=$row["email"];
        	break;}
        }
}
if($pass==1){
	Include("Booking.php");
}
else {
	echo '<script language="javascript">';
	echo 'alert("Unsuccessfull Login")';
	echo '</script>';
	Include("Login.html");
}
/*
$sql = "DELETE FROM wanderlust WHERE password='shaata'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
}
else {
    echo "Error deleting record: " . $conn->error;
}*/
$conn->close();
?>