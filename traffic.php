<?php 
	session_start();
	if(!isset($_SESSION['Email']))
	{	
		header("Location: login.php");  
	}
?>
<html>
<title>ISSUE OPTIONS</title>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" type="text/css" media="all" />
  </head>
  <body>
<center>
 <h1><font face="arial black" size="60">OPTIONS</font></h1><br><br><br>
 </center>
 <body>
<center><form action="traffichome.php"><input type="submit" style="color:black " value="REGISTER TRAFFIC ISSUE" /></form><br><br><p>
<center><form action="getissuedetails.php"><input type="submit" style="color:black " value="VIEW TRAFFIC ISSUE STATUS" /></form><br><br><p>
</center>
</body>
</html>
