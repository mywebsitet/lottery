<?php
require_once 'CONFIGER.PHP';
require_once 'comm.php';

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <form action="" method="post" enctype="multipart/form-data" >
 
<div style="position: absolute;  height: 593px; width: 1275px; left: 59px; top:30px; ">
<div style="position: absolute; height: 105px; width: 1268px; left: 0px; top: 0px;">

<div style="position:absolute;  height: 93px; width: 200px; left: -4px; top: 5px;"> <table >
<tr><td align="center"><img src="20160222_194645.jpg" height="60px" width="60px"  /></td></tr><tr><td>for classes V-VIII</td></tr></table></div>

<div style="position:absolute;   height: 93px; width: 750px; left: 120px; top: 0px;">
<font size="+3" color="#000000"> MATHABHANGA VIVEKANANDA VIDYAMANDIR</font><br>
<font size="+1" color="#000000"><center>
P.O.-Mathavanga, dist.-cooch behar. pin- 736146
<br><u><center> REPORT CARD- <?php
	$tt=date("Y");
	
	echo $tt ; echo "-"; echo $tt+1;
	
	

?>
</center></u></font></div>

<div style="position:absolute;  height: 84px; width: 390px; left: 870px; top: 0px;">
<table><tr><td>total no of working day:</td><td><input type="text" name="r1" /><br /></td></tr><tr><td>no of attendance of the student:</td><td><input type="text" name="r2" /><br /></td></tr><tr><td>conduct of student:</td><td><input type="text" name="r3" /></td></tr></table></div>

<div style="position:absolute;  height: 12px; width: 1075px; left: 184px; top: 94px;">
<table><?php
	$ID=$_GET['ID'];
 $stmt = $db_con->prepare("SELECT * FROM basic WHERE ID='$ID' ");
        $stmt->execute();
		
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			
			?>
          
<tr><td>NAME:</td><td width="250"><?php echo  $row['NAME']; ?></td><td> CLASS:</td><td width="152"><?php echo  $row['CLASS']; ?></td><td> SECTION:</td><td width="152"><?php echo  $row['SECTION']; ?></td><td>
ROLL NO:</td><td width="152"><?php echo  $row['ROLL']; ?></td></tr></table></div></div>
<?php
		}
		?>

<div style="position: absolute; height: 425px; width: 587.5px; left: 0px; top: 128px;">
<table width="557" border="1"><tr><td width="607.5px">
<center><font size="+1">Formativ</font></center></td></tr></table><table width="556" border="1">
<tr><td width="304" height="30">Name of the indicator</td><td  width="77" height="30" >F1<br />10/20</td><td  width="73" height="30" >F2<br />20</td><td  width="74" height="30" >F3<BR />20</td></tr></table>

<table border="1"><tr><td width="304" height="60">Participation</td><td ><input type="text" name="pf1" size="6"  /></td><td><input type="text" name="pf2" size="6" /></td><td><input type="text" name="pf3" size="6" /></td></tr></table>
<table border="1"><tr><td width="304" height="60">Question and Experimentaion</td><td><input type="text" name="qf1" size="6"  /></td><td><input type="text" name="qf2" size="6" /></td><td><input type="text" name="qf3" size="6" /></td></tr></table>
<table border="1"><tr><td width="304" height="60">Interpretation and application</td><td ><input type="text" name="if1" size="6"  /></td><td><input type="text" name="if2" size="6" /></td><td><input type="text" name="if3" size="6" /></td></tr></table>
<table border="1"><tr><td width="304" height="60">Empathy and cooperation</td><td ><input type="text" name="ef1" size="6"  /></td><td><input type="text" name="ef2" size="6" /></td><td><input type="text" name="ef3" size="6" /></td></tr></table>
<table border="1"><tr><td width="304" height="60">aesthetic and Creative Expression</td><td ><input type="text" name="af1" size="6"  /></td><td><input type="text" name="af2" size="6" /></td><td><input type="text" name="af3" size="6" /></td></tr></table>

</div>
<div style="position: absolute; height: 425px; width:  677.5px; left: 591px; top: 128px;">
<table width="558" border="1"><tr><td width="545">
<center><font size="+1">Summative</font></center></td></tr></table>
<table width="558" border="1">
<tr><td width="305" height="30">Name of the Ssubject</td><td  width="76" height="30" >S1<br />10/15</td><td  width="74" height="30" >S2<br />20/25</td><td  width="75" height="30" >S3<BR />50/70</td></tr></table>

<table border="1"><tr><td width="304" height="30">First language</td><td><input type="text" name="fs1" size="6" /></td><td ><input type="text" name="fs2" size="6"  /></td><td><input type="text" name="fs3" size="6" /></td></tr></table>
<table border="1"><tr><td width="304" height="30">2nd  language</td><td><input type="text" name="ss1" size="6" /></td><td ><input type="text" name="ss2" size="6"  /></td><td><input type="text" name="ss3" size="6" /></td></tr></table>
<table border="1"><tr><td width="304" height="30">Mathamatics</td><td><input type="text" name="ms1" size="6" /></td><td ><input type="text" name="ms2" size="6"  /></td><td><input type="text" name="ms3" size="6" /></td></tr></table>
<table border="1"><tr><td width="304" height="30">Science/physical Science</td><td><input type="text" name="ps1" size="6" /></td><td ><input type="text" name="ps2" size="6"  /></td><td><input type="text" name="ps3" size="6" /></td></tr></table>
<table border="1"><tr><td width="304" height="30">Life Science</td><td><input type="text" name="ls1" size="6" /></td><td ><input type="text" name="ls2" size="6"  /></td><td><input type="text" name="ls3" size="6" /></td></tr></table>
<table border="1"><tr><td width="304" height="30">Environment & History</td><td><input type="text" name="ehs1" size="6" /></td><td ><input type="text" name="ehs2" size="6"  /></td><td><input type="text" name="ehs3" size="6" /></td></tr></table>
<table border="1"><tr><td width="304" height="30">Environment &Geography </td><td ><input type="text" name="egs1" size="6"  /></td><td><input type="text" name="egs2" size="6" /></td><td><input type="text" name="egs3" size="6" /></td></tr></table>
<table border="1"><tr><td width="304" height="60">Physical & Art Education</td><td>30/20<br /><input type="text" name="pws1" size="6" /></td><td >40/30<br /><input type="text" name="pws2" size="6"  /></td><td>70<br /><input type="text" name="pws3" size="6" /></td></tr></table>


</div>
<div style="position:absolute;  height: 12px; width: 1075px; left: 18px; top: 560px;">
<font size="+1" color="#000000">Special Efficiency:</font></div>
<div style="position:absolute;  height: 12px; width: 1075px; left: 284px; top: 572px;">
<font size="+1" color="#000000">Sig. of Classteacher- ....................................    &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;     Sig. of Guardian- ................................   &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;    Sig of Headmaster- .......................................</font></div>
</div>
<div style="position:absolute;  height: 12px; width: 1075px; left: 284px; top: 622px;">

<input type="submit" name="submit" value="Submit" /></div>
</form></body>
</html>