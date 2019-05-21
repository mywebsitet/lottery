<?php
require_once 'CONFIGER.PHP';
require_once 'bankcod.php';

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data">
<table width="388" border="1"><tr><td width="136" >BANK NAME</td><td width="142" ><input type="text" name="bname" size="29"  /></td></tr>
<tr><td >BRANCH NAME</td><td ><input type="text" name="branch" size="29"  /></td></tr>
<tr><td >AC_NO</td><td ><input type="text" name="ac" size="29"  /></td></tr>
<tr><td >IFSC</td><td ><input type="text" name="ifsc" size="29"  /></td></tr></table>
<input type="submit" name="submit" value="Submit" /></form>
</body>
</html>