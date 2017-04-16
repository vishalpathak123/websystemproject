<doctype!html>
<html>
<head>

	<script>
		window.alert("Hover over the lab areas to get 360° view...");
	</script>
<style type="text/css">
body {
	background-color: #DCDEDF;
	background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    margin:0;
    padding: 0;
    font-family: "Lato", sans-serif;
    transition: background-color .5s;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
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
.cv
{
	background-color: red;
}
.edit
{
	color:red;
	font-family: courier;
}
</style>
</head>
<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="page4.php">Embedded Lab</a>
  <a href="#">DS Lab</a>
  <a href="#">IP Lab</a>
  <a href="#">HTS Lab</a>
  <a href="#">WST Lab</a>
  <a href="#">VP Lab</a>
  <a href="#">OOPS Lab</a>
  <a href="#">OST Lab</a>
  <a href="#">RDBMS LAb</a>
</div>

<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>

<?php    
    session_start();
    $name=$_SESSION['username'];     
    echo "<center><div class='edit'><h1>Welcome To SRM IT Department: $name</h1><br></div></center>";
    $date = date_default_timezone_set('Asia/Kolkata');
	$today = date("F j, Y, g:i a");
	echo "Date : $today".'<br>';
?>
<img id="image" src="images/final_layout.jpg" border="0" width="1360" height="565" orgWidth="1360" orgHeight="565" usemap="#image-maps-2017-04-06-162755" alt="" />
<map name="image-maps-2017-04-06-162755" id="ImageMapsCom-image-maps-2017-04-06-162755">
<area id="EL" class="cv" alt="" title="Embedded Lab" href="page4.php" shape="rect" coords="868,285,982,522" style="outline: none;" target="_self"     />
<area id="ost" alt="" title="OST Lab" href="" shape="rect" coords="437,386,581,524" style="outline:none;" target="_self"     />
<area id="ol" alt="" title="OOPS Lab" href="" shape="rect" coords="438,133,576,375" style="outline:none;" target="_self"     />
<area id="vl" alt="" title="VP Lab" href="" shape="rect" coords="434,28,581,122" style="outline:none;" target="_self"     />
<area id="cfl" alt="" title="Cyber Forensic Lab" href="" shape="rect" coords="871,28,985,270" style="outline:none;" target="_self"     />
<area id="ca" alt="" title="Cisco Academy" href="" shape="rect" coords="1220,283,1323,525" style="outline:none;" target="_self"     />
<area id="rl" alt="" title="RDBMS Lab" href="" shape="rect" coords="1215,31,1321,278" style="outline:none;" target="_self"     />
<area id="dl" alt="" title="DataStructures Lab" href="" shape="rect" coords="17,25,128,266" style="outline:none;" target="_self"     />
<area id="ip" alt="" title="Integrated Programming Lab" href="" shape="rect" coords="20,272,131,525" style="outline:none;" target="_self"     />
<area id="hl" alt="" title="HST Lab" href="" shape="rect" coords="301,28,412,151" style="outline:none;" target="_self"     />
<area id="wl" alt="" title="Web System Lab" href="" shape="rect" coords="298,278,387,524" style="outline:none;" target="_self"     />
<area shape="rect" coords="1358,563,1360,565" alt="Image Map" style="outline:none;" title="Image Map" href="http://www.image-maps.com/index.php?aff=mapped_users_0" />
</map>
</body>
</html>
