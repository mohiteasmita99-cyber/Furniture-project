<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname ="dream home";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error) {
    die("connnection failed:".$conn->connect_error);
}

$email=$_POST['email'];
$mobile=$_POST['mobile'];

$sql="INSERT INTO Final_register(email,mobile) values ('gayatri@gamil.com','8766633023')";

if ($conn->query($sql) === TRUE)  {
    echo"new record created successfully";
} else {
echo"error:".$sql ."<br>".$conn->error;
}

$conn->close();
?>
