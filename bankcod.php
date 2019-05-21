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
		
		
		$BANK_NAME = $_POST['bname'];
		$BRANCH = $_POST['branch'];
		$AC_NO = $_POST['ac'];
		$IFSC = $_POST['ifsc'];
		try{
			
		$stmt = $db_con->prepare("INSERT INTO bank (ID,BANK_NAME,BRANCH,AC_NO,IFSC) values(:id,:bn,:br,:ac,:ifsc)");
		$stmt->bindParam(":id", $ID);
		
		$stmt->bindParam(":bn", $BANK_NAME);
		$stmt->bindParam(":br", $BRANCH);
		$stmt->bindParam(":ac", $AC_NO);
		$stmt->bindParam(":ifsc", $IFSC);
		
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