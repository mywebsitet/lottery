
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<font size="+3">INPUT RESULT</font>
<div style="position:absolute; top:auto; left:125PX;">
<table  border="1">
<tr><td width="12%">ID</td><td  width="25%">STUDENT NAME</td><td  width="10%">CLASS</td><td  width="7%">ROLL NO</td><td  width="11%">SECTION</td><td  width="12%">EDIT</td><td  width="12%">RESULT</td><td  width="12%">RESULT INPUT</td></tr><br />
<?php
require_once 'CONFIGER.PHP';
       // require_once 'dbconfig.php';
        //$cen=$_SESSION['centerid'];
		
		
        $stmt = $db_con->prepare("SELECT * FROM basic ");
        $stmt->execute();
		
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			
			?>

<tr><td><?php echo  $row['ID']; ?></td>
<td><?php echo  $row['NAME']; ?></td>
<td><?php echo  $row['CLASS']; ?></td>
<td><?php echo  $row['ROLL']; ?></td>
<td><?php echo  $row['SECTION']; ?></td>

<td><a href="editresult.php? ID=<?php echo $row['ID']; ?>"> EDIT RESULT </a></td>
<td><a href="resultshow.php? ID=<?php echo $row['ID']; ?>"> RESULT SHOW </a></td>
<td><a href="resultinput.php? ID=<?php echo $row['ID']; ?>"> RESULT INPUT </a></td></tr><br />
<?php

		}
		?>
        </table></div>
</body>
</html>