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

if(isset($_POST['submit'])){


 $image=$_FILES['image']['name'];



$query = "INSERT INTO card2(image)VALUES('$image')";
$query_run = mysqli_query($conn,$query);




if ($query_run) {
	move_uploaded_file($_FILES["image"]["tmp_name"], "photo/".$_FILES["image"]["name"]);
	 header('location:img2.php');

 }

}





?>