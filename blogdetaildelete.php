<?php
$servername="localhost";
$username="root";
$password="";
$dbname="lokesh";
$conn=new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
	die("connectionfailed:".$conn->connect_error);
}
else {
	echo "connectionsuccessfully";
}
$id=$_GET['id'];

$delete = "DELETE from card1 WHERE id='$id'";
$run_update=mysqli_query($conn, $delete);
header("Location: blogdetailrecord.php");

?>
