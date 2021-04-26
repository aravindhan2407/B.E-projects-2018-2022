<?php 
	session_start();
	if(!isset($_SESSION['Email']))
	{	
		header("Location: login.php");  
	}
?>
<html>
<head>
<title>HOMEPAGE</title>
</head>
<body style="background:  #CCC;">
<center>
<h1><font face="arial black" size="60">ONLINE COMPLAINT REGISTER</h1></font>
</center>
<meta charset="utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" media="all"/>
<br><br>
<center><form action="complaint.php"><input type="submit" style="color:black " value="COMPLAINT" /></form><br><br><p>
<center><form action="request.php"><input type="submit" style="color:black " value="REQUEST" /></form><br><br><p>
<center><form action="traffic.php"><input type="submit" style="color:black " value="TRAFFIC" /></form><br><br><p>
<center><form action="logout.php"><input type="submit" style="color:black " name="logout" value="LOGOUT" /></form><br><br><p>
</center>
</body>
</html>
