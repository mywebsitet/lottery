<?php
//ob_start();
//session_start();
require_once 'CONFIGER.PHP';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data">

<?php

$ID=$_GET['ID'];
 $stmt = $db_con->prepare("SELECT * FROM basic  WHERE ID='$ID'");
        $stmt->execute();
		
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			
			?>
<div style="position: absolute;  height: 593px; width: 1275px; left: 29px; top: 28px; background-color:#C39;">
<div style="position: absolute; height: 105px; width: 1268px; left: 0px; top: 0px;">

<div style="position:absolute;  height: 93px; width: 200px; left: -4px; top: 5px;"> <table >
<tr><td align="center"><img src="20160222_194645.jpg" height="60px" width="60px"  /></td></tr><tr><td>for classes V-VIII</td></tr></table></div>

<div style="position:absolute;   height: 93px; width: 750px; left: 120px; top: 0px;">
<font size="+3" color="#000000"> MATHABHANGA VIVEKANANDA VIDYAMANDIR</font><br>
<font size="+1" color="#000000"><center>
P.O.-Mathavanga, dist.-cooch behar. pin- 736146
<br><u><center> REPORT CARD-<?php
	$tt=date("Y");
	
	echo $tt ; 
	
	

?></center></u></font></div>


<div style="position:absolute;  height: 84px; width: 390px; left: 870px; top: 0px;">
<table><tr><td>total no of working day:</td><td><input type="text" name="r1" /><br /></td></tr><tr><td>no of attendance of the student:</td><td><input type="text" name="r2" /><br /></td></tr><tr><td>conduct of student:</td><td><input type="text" name="r3" /></td></tr></table></div>

<div style="position:absolute;  height: 12px; width: 1075px; left: 184px; top: 94px;">
<table><tr><td width="70">NAME:</td><td width="200"><?php echo $row['NAME']; ?></td><td width="70"> CLASS:</td><td  width="50"><?php echo $row['CLASS']; ?></td><td width="90"> SECTION:</td><td  width="50"><?php echo $row['SECTION']; ?></td><td width="100">
ROLL NO:</td><td  width="50"><?php echo $row['ROLL']; ?></td></tr></table></div></div>
<?php
		}
		//}
		?>

<?php
//{
	//if(isset($_POST['SARCH']))
       // require_once 'dbconfig.php';
        //$cen=$_SESSION['centerid'];
		
        $stmt = $db_con->prepare("SELECT * FROM formative   WHERE ID='$ID'");
        $stmt->execute();
		//$i=1;
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			?>
<div style="position: absolute; height: 425px; width: 587.5px; left: 0px; top: 128px;">
<table border="1"><tr><td width="637.5px">
<center><font size="+1">Formativ</font></center></td></tr></table><table border="1">
<tr><td width="254" height="39">Name of the indicator</td><td  width="74" height="30" >F1<br />10/20</td><td  width="74" height="30" >F2<br />20</td><td  width="75" height="30" >F3<BR />20</td><td  width="75" height="30" >TOTAL<BR />50/60</td></tr></table>

<table border="1"><tr><td width="270" height="57">Participation</td><td width="80" align="center" > <?php echo $row['PF1']; ?></td><td width="80" align="center"><?php echo $row['PF2']; ?></td><td width="80" align="center"><?php echo $row['PF3']; ?></td><td width="80" align="center"> <?php echo $row['PFT']; ?></td></tr></table>
<table border="1"><tr><td width="270" height="55">Question and Experimentaion</td><td width="80" align="center"><?php echo $row['QF1']; ?></td><td width="80" align="center"><?php echo $row['QF2']; ?></td><td width="80" align="center"><?php echo $row['QF3']; ?></td><td width="80" align="center"> <?php echo $row['QFT']; ?></td></tr></table>
<table border="1"><tr><td width="270" height="57">Interpretation and application</td><td width="80" align="center"><?php echo $row['IF1']; ?></td><td width="80" align="center"><?php echo $row['IF2']; ?></td><td width="80" align="center"><?php echo $row['IF3']; ?></td><td width="80" align="center"> <?php echo $row['IFT']; ?></td></tr></table>
<table border="1"><tr><td width="270" height="55">Empathy and cooperation</td><td  width="80" align="center"><?php echo $row['EF1']; ?></td><td  width="80" align="center"><?php echo $row['EF2']; ?></td><td  width="80" align="center"><?php echo $row['EF3']; ?></td><td  width="80" align="center"> <?php echo $row['EFT']; ?></td></tr></table>
<table border="1"><tr><td width="270" height="55">aesthetic and Creative Expression</td><td  width="80" align="center"><?php echo $row['AF1']; ?></td><td  width="80" align="center"><?php echo $row['AF2']; ?></td><td  width="80" align="center"><?php echo $row['AF3']; ?></td><td  width="80" align="center"> <?php echo $row['AFT']; ?></td></tr></table>

</div>
<div style="position: absolute; height: 425px; width:  677.5px; left: 591px; top: 128px;">
<table border="1"><tr><td width="687.5px">
<center><font size="+1">Summative</font></center></td></tr></table>
<table border="1">
<tr><td width="264" height="30">Name of the Ssubject</td><td  width="75" height="30" >S1<br />10/15</td><td  width="75" height="30" >S2<br />20/25</td><td  width="75" height="30" >S3<BR />50/70</td><td  width="75" height="30" >TOTAL<BR />80/110</td><td  width="75" height="30" >GRADE</td></tr></table>

<table border="1"><tr><td width="264" height="30">First language</td><td width="75" align="center"><?php echo $row['FS1']; ?></td><td width="75" align="center"><?php echo $row['FS2']; ?></td><td width="75" align="center"><?php echo $row['FS3']; ?></td><td width="75" align="center"><?php echo $row['FST']; ?></td><td width="75" align="center"> <?php echo $row['FSG']; ?></td></tr></table>
<table border="1"><tr><td width="264" height="30">2nd  language</td><td width="75" align="center"><?php echo $row['SS1']; ?></td><td width="75" align="center"><?php echo $row['SS2']; ?></td><td width="75" align="center"><?php echo $row['SS3']; ?></td><td width="75" align="center"><?php echo $row['SST']; ?></td><td width="75" align="center"><?php echo $row['SSG']; ?></td></tr></table>
<table border="1"><tr><td width="264" height="30">Mathamatics</td><td width="75" align="center"><?php echo $row['MS1']; ?></td><td width="75" align="center"><?php echo $row['MS2']; ?></td><td width="75" align="center"><?php echo $row['MS3']; ?></td><td width="75" align="center"><?php echo $row['MST']; ?></td><td width="75" align="center"> <?php echo $row['MSG']; ?></td></tr></table>
<table border="1"><tr><td width="264" height="30">Science/physical Science</td><td width="75" align="center"><?php echo $row['PS1']; ?></td><td width="75" align="center"><?php echo $row['PS2']; ?></td><td width="75" align="center"><?php echo $row['PS3']; ?></td><td width="75" align="center"><?php echo $row['PST']; ?></td><td width="75" align="center"><?php echo $row['PSG']; ?></td></tr></table>
<table border="1"><tr><td width="264" height="30">Life Science</td><td width="75" align="center"><?php echo $row['LS1']; ?></td><td width="75" align="center"><?php echo $row['LS2']; ?></td><td width="75" align="center"><?php echo $row['LS3']; ?></td><td width="75" align="center"><?php echo $row['LST']; ?></td><td width="75" align="center"> <?php echo $row['LSG']; ?></td></tr></table>
<table border="1"><tr><td width="264" height="30">Environment & History</td><td width="75" align="center"><?php echo $row['EHS1']; ?></td><td width="75" align="center"><?php echo $row['EHS2']; ?></td><td width="75" align="center"><?php echo $row['EHS3']; ?></td><td width="75" align="center"><?php echo $row['EHST']; ?></td><td width="75" align="center"> <?php echo $row['EHSG']; ?></td></tr></table>
<table border="1"><tr><td width="264" height="30">Environment &Geography </td><td width="75" align="center"><?php echo $row['EGS1']; ?></td><td width="75" align="center"><?php echo $row['EGS2']; ?></td><td width="75" align="center"><?php echo $row['EGS3']; ?></td><td width="75" align="center"><?php echo $row['EGST']; ?></td><td width="75" align="center"> <?php echo $row['EGSG']; ?></td></tr></table>
<table border="1"><tr>
     <td rowspan="2" width="264" >Physical & Art Education</td>
     <td align="center" width="75">30/20</td>
     <td align="center" width="75">40/30</td>
      <td align="center" width="75">70</td>
       <td align="center" width="75">140/120</td>
    <td rowspan="2" align="center" width="75"><?php echo $row['PWSG'];?></td>
     

</tr>

<tr>
     
      <td align="center"><?php echo $row['PWS1']; ?></td>
      <td align="center"><?php echo $row['PWS2']; ?></td>
      <td align="center"><?php echo $row['PWS3']; ?></td>
      <td align="center"><?php echo $row['PWST']; ?></td>
     
     

</tr></table>


</div>

<div style="position:absolute;  height: 12px; width: 1075px; left: 18px; top: 560px;">
<font size="+1" color="#000000">Special Efficiency:</font></div>
<div style="position:absolute;  height: 12px; width: 1075px; left: 284px; top: 572px;">
<font size="+1" color="#000000">Sig. of Classteacher- ....................................    &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;     Sig. of Guardian- ................................   &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;    Sig of Headmaster- .......................................</font></div>
</div>
<?php
		}
//}
?>
</form>
</body>
</html>