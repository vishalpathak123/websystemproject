<?php
	session_start();
	$conn=new mysqli('localhost','root','','virtual');
	if($conn->connect_error)
	{
		die("connection failed: ".$conn->connect_error);
	}

	$myuser=$_POST['username'];
	$mypassword=$_POST['password'];
	$_SESSION["username"]=$myuser;
	$_SESSION["password"]=$mypassword;

	echo "session variable are set";

	$sql="SELECT * FROM user WHERE user='$myuser' and cpass='$mypassword'";
	echo "$sql";

	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	echo "$count";

	if($count==1)
	{
		echo "login successfully.";
		header("location:welcome.php");
	}
	else
	{
		echo "login failed";
		header("location:login.html");
	}
?>