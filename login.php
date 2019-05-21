<?php

require_once 'CONFIGER.PHP';
if(isset($_GET["submit2"]))
{
$t_name=$_GET['t_name'];

$pass=$_GET['pass'];
//$stmt = $db_con->prepare("SELECT t_name,pass FROM admin");
//$t_name = trim($_POST['t_name']);
//$pass = trim($_POST['pass']);
/*$sth = $db_con->prepare("SELECT * FROM admin");

//$sth = $dbh->prepare("SELECT * FROM admin WHERE t_name = ? AND pass = ?");
$sth->bindParam(1, $t_name);
$sth->bindParam(2, $pass);
$sth->execute();

if ($sth->rowCount() > 0)*/
//while ($row = mysql_fetch_array($stmt))
//if($row[0]==$t_name && $row[1]==$pass)
$sql = "SELECT * FROM admin WHERE `t_name` = :t_name AND `pass` = :pass ";

                    $stmt = $db_con->prepare($sql); 
                    $stmt->execute(array(':t_name' => $_POST['t_name'], ':pass'=> $_POST['pass']));

                    $num=$stmt->rowCount();
                    if($num > 0)
 {
	 
//$_SESSION['login']=session_id();
//$_SESSION['centerid']=$id;
 header("location:comm.php");
 }
 else
 {
 $s="CenterId Or Password does not match";

 }
}
 {
// catch (PDOException $e) 
                {
                    echo 'Caught exception: ',  $e->getMessage(), "\n";
                }
        }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="get" enctype="multipart/form-data">
<div style="position:absolute; top:10px; right:0px; "> 
<table height="50px" width="1350px"><tr><td>
<table align="left" height="px" width="600px">
<font size="+3" color="#FF0000"><marquee>WEL COME MY SIDE</marquee></font></table></td><TD>
<table  align="right">
<tr><td>USEAR ID</td><td><input type="text" name="t_name" /></td>
<td>PASSWORD</td>&nbsp;&nbsp;&nbsp;&nbsp;<td><input type="password" name="pass" /></td><td>
<input type="submit" name="submit2" value="log in" /></td></tr></table></td></tr></table></div>
</form>
</body>
</html>