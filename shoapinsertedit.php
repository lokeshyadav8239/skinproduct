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
$id=$_POST['id'];
$title= $_POST['title'];


$new_image= $_FILES['image']['name'];
$old_image_temp=$_FILES['image']['tmp_name'];

if($old_image_temp != "")
{
    move_uploaded_file($old_image_temp , "photo/$new_image");
    $c_update="update shoap set title='$title',   image= '$new_image'
     where id='$id'";   
}else
{
    $c_update="update shoap set  title='$title'
     where id='$id'";
}

$run_update=mysqli_query($conn, $c_update);
header("Location: shoaprecord.php");

?>