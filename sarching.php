<?php
ob_start();
session_start();

if(isset($_POST['SARCH']))
{
	$ID=$_POST['ID'];
	$_SESSION['A']=$ID;
	header("location:searchcod.php");
}

	
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data">
<table><tr><td>input id</td><td><input type="text" name="ID" /></td><td><input type="submit" name="SARCH" value="searching" /></td></tr></table>



         </form>   
</body>
</html>