<?php

require_once 'CONFIGER.PHP';

 if(isset($_POST['submit']))
 
 //echo $stname;
//if($_POST)
 
	{
		//echo "ssss";
		$ID=$_GET['ID'];
		//$STNAME = $_POST['stname'];
		//$ROLL = $_POST['roll'];
		//$CLASS = $_POST['class'];
		//$SEC = $_POST['section'];
		$PF1 = $_POST['pf1'];
		$PF2 = $_POST['pf2'];
		$PF3 = $_POST['pf3'];
		$PFT=$PF1+$PF2+$PF3;
		$QF1 = $_POST['qf1'];
		$QF2 = $_POST['qf2'];
		$QF3 = $_POST['qf3'];
		$QFT=$QF1+$QF2+$QF3;
		$IF1 = $_POST['if1'];
		$IF2 = $_POST['if2'];
		$IF3 = $_POST['if3'];
		$IFT=$IF1+$IF2+$IF3;
		$EF1 = $_POST['ef1'];
		$EF2 = $_POST['ef2'];
		$EF3 = $_POST['ef3'];
		$EFT=$EF1+$EF2+$EF3;
		$AF1 = $_POST['af1'];
		$AF2 = $_POST['af2'];
		$AF3 = $_POST['af3'];
		$AFT=$AF1+$AF2+$AF3;
		
		$FS1 = $_POST['fs1'];
		$FS2 = $_POST['fs2'];
		$FS3 = $_POST['fs3'];
		$FST=$FS1+$FS2+$FS3;
		
		$SS1 = $_POST['ss1'];
		$SS2 = $_POST['ss2'];
		$SS3 = $_POST['ss3'];
		$SST=$SS1+$SS2+$SS3;
		$MS1 = $_POST['ms1'];
		$MS2 = $_POST['ms2'];
		$MS3 = $_POST['ms3'];
		$MST=$MS1+$MS2+$MS3;
		$PS1 = $_POST['ps1'];
		$PS2 = $_POST['ps2'];
		$PS3 = $_POST['ps3'];
		$PST=$PS1+$PS2+$PS3;
		$LS1 = $_POST['ls1'];
		$LS2 = $_POST['ls2'];
		$LS3 = $_POST['ls3'];
		$LST=$LS1+$LS2+$LS3;
		$EHS1 = $_POST['ehs1'];
		$EHS2 = $_POST['ehs2'];
		$EHS3 = $_POST['ehs3'];
		$EHST=$EHS1+$EHS2+$EHS3;
		$EGS1 = $_POST['egs1'];
		$EGS2 = $_POST['egs2'];
		$EGS3 = $_POST['egs3'];
		$EGST=$EGS1+$EGS2+$EGS3;
		$PWS1 = $_POST['pws1'];
		$PWS2 = $_POST['pws2'];
		$PWS3 = $_POST['pws3'];
		$PWST=$PWS1+$PWS2+$PWS3;
		//$total=$FST;
		//$total=$SST;
		//$total=$MST;
		//$total=$PST;
		//$x;
		//$x =array($FST,$SST,$MST);
		$arr = array($FST, $SST, $MST);
//reset($arr);
while (list(, $value) = each($arr)) {
    echo "Value: $value<br />\n";
}
$I=0;
foreach ($arr as $value) {
    echo "Value: $value<br />\n";


		$total=$value;
		//$total2=$SST;
		//$total=$MST;
		
		if($total>=90 || $total>=90)
		{
			$get='AA';
			echo $get;
		}
		else
		if($total>80 && $total<90)
		{
		$get='A+';
		$get1='A+';
		echo $get;
		echo $get1;
	}
	else
		if($total>70 && $total<80 )
		{
		$get='A';
		
		echo $get;
	}
	else
		if($total>60 && $total<70)
		{
		$get='B+';
	
		echo $get;
	}
	else
		if($total>50 && $total<60)
		{
		$get='B';
		echo $get;
	}
	else
		if($total>40 && $total<50 )
		{
			$get='C+';
		
		echo $get;
		
		
	}
	else
		if($total>25 && $total<40)
		{
		$get='C';
		echo $get;
	}	
	else
		if($total<25)
		{
		$get='D';
	}
		//}
		//$i++;
	
	//$FSG=$get;
		//$SSG=$get;
		//$FSG=$get1;
		//$SSG=$get1;
		//$MSG=$get;
		//$i++;
		$A[$I]=$get;
		$I++;
		
	}
	for($I=0;$I<8;$I++)
	{
		if($I==0)
		{
			$FSG=$A[$I];
		}
		if($I==1)
		{
			$SSG=$A[$I];
		}
		if($I==2)
		{
			$MSG=$A[$I];
		}
		//$I++;
	}
	
		try{
			
			
		$stmt = $db_con->prepare("UPDATE formative SET  PF1=:pf1,PF2=:pf2,PF3=:pf3,PFT=:pft,QF1=:qf1,QF2=:qf2,QF3=:qf3,QFT=:qft,IF1=:if1,IF2=:if2,IF3=:if3,IFT=:ift,EF1=:ef1,EF2=:ef2,EF3=:ef3,EFT=:eft,AF1=:af1,AF2=:af2,AF3=:af3,AFT=:aft,FS1=:fs1,FS2=:fs2,FS3=:fs3,FST=:fst,FSG=:fsg,SS1=:ss1,SS2=:ss2,SS3=:ss3,SST=:sst,SSG=:ssg,MS1=:ms1,MS2=:ms2,MS3=:ms3,MST=:mst,MSG=:msg,PS1=:ps1,PS2=:ps2,PS3=:ps3,PST=:pst,LS1=:ls1,LS2=:ls2,LS3=:ls3,LST=:lst,EHS1=:ehs1,EHS2=:ehs2,EHS3=:ehs3,EHST=:ehst,EGS1=:egs1,EGS2=:egs2,EGS3=:egs3,EGST=:egst,PWS1=:pws1,PWS2=:pws2,PWS3=:pws3,PWST=:pwst WHERE  ID='$ID'");
		//$stmt->bindParam(":stname", $STNAME);
		//$stmt->bindParam(":roll", $ROLL);
		//$stmt->bindParam(":cls", $CLASS);
		//$stmt->bindParam(":sec", $SEC);
		$stmt->bindParam(":pf1", $PF1);
		$stmt->bindParam(":pf2", $PF2);
		$stmt->bindParam(":pf3", $PF3);
		$stmt->bindParam(":pft", $PFT);
		
		$stmt->bindParam(":qf1", $QF1);
		$stmt->bindParam(":qf2", $QF2);
		$stmt->bindParam(":qf3", $QF3);
		$stmt->bindParam(":qft", $QFT);
		
		$stmt->bindParam(":if1", $IF1);
		$stmt->bindParam(":if2", $IF2);
		$stmt->bindParam(":if3", $IF3);
		$stmt->bindParam(":ift", $IFT);
		
		$stmt->bindParam(":ef1", $EF1);
		$stmt->bindParam(":ef2", $EF2);
		$stmt->bindParam(":ef3", $EF3);
		$stmt->bindParam(":eft", $EFT);
		
		$stmt->bindParam(":af1", $AF1);
		$stmt->bindParam(":af2", $AF2);
		$stmt->bindParam(":af3", $AF3);
		$stmt->bindParam(":aft", $AFT);
		
		$stmt->bindParam(":fs1", $FS1);
		$stmt->bindParam(":fs2", $FS2);
		$stmt->bindParam(":fs3", $FS3);
		$stmt->bindParam(":fst", $FST);
		$stmt->bindParam(":fsg", $FSG);
		
		$stmt->bindParam(":ss1", $SS1);
		$stmt->bindParam(":ss2", $SS2);
		$stmt->bindParam(":ss3", $SS3);
		$stmt->bindParam(":sst", $SST);
		$stmt->bindParam(":ssg", $SSG);
		
		$stmt->bindParam(":ms1", $MS1);
		$stmt->bindParam(":ms2", $MS2);
		$stmt->bindParam(":ms3", $MS3); 
		$stmt->bindParam(":mst", $MST);
		$stmt->bindParam(":msg", $MSG);
		
		$stmt->bindParam(":ps1", $PS1);
		$stmt->bindParam(":ps2", $PS2);
		$stmt->bindParam(":ps3", $PS3); 
		$stmt->bindParam(":pst", $PST);
		
		$stmt->bindParam(":ls1", $LS1);
		$stmt->bindParam(":ls2", $LS2);
		$stmt->bindParam(":ls3", $LS3);
		$stmt->bindParam(":lst", $LST);
		
		$stmt->bindParam(":ehs1", $EHS1);
		$stmt->bindParam(":ehs2", $EHS2);
		$stmt->bindParam(":ehs3", $EHS3);
		$stmt->bindParam(":ehst", $EHST);
		
		$stmt->bindParam(":egs1", $EGS1);
		$stmt->bindParam(":egs2", $EGS2);
		$stmt->bindParam(":egs3", $EGS3);
		$stmt->bindParam(":egst", $EGST);
		
		$stmt->bindParam(":pws1", $PWS1);
		$stmt->bindParam(":pws2", $PWS2);
		$stmt->bindParam(":pws3", $PWS3);
		$stmt->bindParam(":pwst", $PWST);
		
			if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
		}
	}
catch(PDOException $e)
{
			echo $e->getMessage();
}
	}
?>


