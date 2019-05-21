<?php
 $stmt = $db_con->prepare("SELECT * FROM basic ");
        $stmt->execute();
		
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			
			?>
          <?php
		   $ID= $row['ID'];
		   echo $ID;
		}
		?>
<?php

//require_once 'RESULTINPUT.PHP';

 if(isset($_POST['submit']))
 
 
	{
		
		
		$MNAME = $_POST['bname'];
		$RELIGION = $_POST['branch'];
		$OCCUPATION = $_POST['ac'];
		$AD_NO = $_POST['ifsc'];
		try{
			
		$stmt = $db_con->prepare("INSERT INTO others (ID,MNAME,RELIGION,OCCUPATION,AD_NO) values(:id,:mn,:re,:oc,:ab)");
		$stmt->bindParam(":id", $ID);
		
		$stmt->bindParam(":mn", $MNAME);
		$stmt->bindParam(":re", $RELIGION);
		$stmt->bindParam(":oc", $OCCUPATION);
		$stmt->bindParam(":ab", $AD_NO);
		
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