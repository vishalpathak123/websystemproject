<?php

	session_start();
	$db=mysqli_connect("localhost","root","","virtual");
	if(isset($_POST['Submit']))
	{
		extract($_POST);
		if($pass==$cpass)
		{
			$sql="INSERT INTO user(name,email,user,cpass) VALUES('$name','$email','$user','$pass')";
			mysqli_query($db,$sql);
			$_SESSION['message']="Successfully Registered";
			header("location:login.html");
		}
		else
		{
			$_SESSION['message']="Registration Failed.";
			header("location:signup.html");
		}
	}
?>