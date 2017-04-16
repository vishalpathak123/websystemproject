<html>
<head>
	<style>
	body
        {
            background-color:#DCDEDF;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            margin: 0;
            padding: 0;
        }
		.editme
		{
			border:3px solid black;
			width:95%;
			height:95%;
			margin-left:20px;
			margin-bottom: 20px;
			margin-top:10px;
			margin-right: 20px;
		}
	.button {
	-moz-box-shadow: 0px 0px 0px 2px #9fb4f2;
	-webkit-box-shadow: 0px 0px 0px 2px #9fb4f2;
	box-shadow: 0px 0px 0px 2px #9fb4f2;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #7892c2), color-stop(1, #476e9e));
	background:-moz-linear-gradient(top, #7892c2 5%, #476e9e 100%);
	background:-webkit-linear-gradient(top, #7892c2 5%, #476e9e 100%);
	background:-o-linear-gradient(top, #7892c2 5%, #476e9e 100%);
	background:-ms-linear-gradient(top, #7892c2 5%, #476e9e 100%);
	background:linear-gradient(to bottom, #7892c2 5%, #476e9e 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#7892c2', endColorstr='#476e9e',GradientType=0);
	background-color:#7892c2;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
	border-radius:10px;
	border:1px solid #4e6096;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:19px;
	padding:12px 37px;
	text-decoration:none;
	text-shadow:0px 1px 0px #283966;
	}
.button:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #476e9e), color-stop(1, #7892c2));
	background:-moz-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:-webkit-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:-o-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:-ms-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:linear-gradient(to bottom, #476e9e 5%, #7892c2 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#476e9e', endColorstr='#7892c2',GradientType=0);
	background-color:#476e9e;
}
.button:active {
	position:relative;
	top:1px;
}
	</style>
	
</head>
<?php
	
	$connect=mysqli_connect("localhost","root","","virtual");

	$sql="SELECT * FROM images";
	$result=mysqli_query($connect,$sql);

	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_array($result))
		{?>
			<!--<form action="retrieve.php" method="POST">-->
			<script src="https://360player.io/static/dist/scripts/embed.js" async></script>
            <iframe src="https://360player.io/p/XAFy3V/" frameborder="0" width=100% height=500 allowfullscreen data-token="XAFy3V"></iframe>
            <center><B><h2 style="font-family: courier;">SRM IT Department Map Layout</h2></center>
			<img src="<?php echo $row['images'];?>"class="editme">
			
			<center>
			<input type="submit" class="button" onclick="location.href='signout.php';" name="Submit" value="SignOut">
			</center>
			<!--</form>-->
		<?php
		}
	}
?>
