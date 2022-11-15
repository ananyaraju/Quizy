<?php
	include('connection.php');

	$name=$_POST['name'];
	$email=$_POST['email'];
    $password=$_POST['password'];
 
	mysqli_query($con,"insert into `credentials` values ('$name','$email','$password')");

    echo '<script type="text/javascript">
    alert("User registered successfully.");
    location="login.php";
    </script>';
 
?>