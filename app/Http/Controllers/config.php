<?php
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "movietheatredb";

//creating connection
$con = new mysqli($servername,$username,$password);
if($con->connect_error){
	die("Connection failed: ".$con->connect_error);

}
else{
	mysqli_select_db($con,$dbname);
	echo "Connection Successful";
}
?>