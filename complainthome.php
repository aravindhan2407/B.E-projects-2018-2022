<?php 
	session_start();
	if(!isset($_SESSION['Email']))
	{	
		header("Location: login.php");  
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>COMPLAINT REGISTRATION FORM</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" media="all" />
</head>
<body bgcolor="black">
<br>
<center>
<font align=center size=24 color="white">COMPLAINT REGISTRATION FORM</font>
</center>
<script>
function openWin() {
    window.open("areas.php");
}
function openWind() {
    window.open("homepage.php","_self");
}
</script>
<br>
<br>
<br>
<form name="complaint" action="complaintdup.php" method="post" align="center">
  <center>
<p style="color:white;">COMPLAINT ID: <input type="text" name="complaint_id" align="center" /> </p>
<p style="color:white;">&emsp;&emsp;&emsp;&emsp;  NAME: <input type="text" name="name" align="center"/> </p>
<p style="color:white;">&emsp;&emsp;AREA CODE: <input type="text" name="area" align="center"/> </p>
<p style="color:white;">PHONE NUMBER: <input type="text" name="phone_number" align="center"/> </p>
<p style="color:white;">&emsp;DESCRIPTION: <input type="textarea" name="description" align="center"/> </p>
<br><br>
<p style="color:white;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="submit" style="color:black " value="SUBMIT"  /> </p></center>
</form><br><br>
<center>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="button" style="color:black " value="VIEW YOUR AREA CODE" onclick="openWin()"/></center>
<br><br>
<center>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="button" style="color:black " value="HOME" onclick="openWind()"/></center>
</body>
</html>
