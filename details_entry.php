<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="databse123";


$conn=mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn)
	{die("connection failed:" . mysqli_connect_error());}

if(isset($_POST['save']))
   {
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];

$sql_query = "INSERT INTO entry_details (first_name,last_name,gender,email,phone)
	     VALUES ('$first_name','$last_name','$gender','$email','$phone')";

if(mysqli_query($conn,$sql_query))
	{ 
	   echo "new details entry inserted successfully";
	}
else
	{
	   echo "error: " . $sql . "" . mysqli_error($conn);
        }

mysqli_close($conn);

   }

?>
