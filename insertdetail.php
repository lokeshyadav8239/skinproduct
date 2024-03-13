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

$title=$_POST['title'];
 $image=$_FILES['image']['name'];

$price=$_POST['price'];

$query = "INSERT INTO card1(title,image,price)VALUES('$title','$image','$price')";
$query_run = mysqli_query($conn,$query);





if ($query_run) {
	move_uploaded_file($_FILES["image"]["tmp_name"], "photo/".$_FILES["image"]["name"]);
	 header("location:blogdetailrecord.php");

 }

}





?>