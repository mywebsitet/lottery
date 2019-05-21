<?php
ob_start();
session_start();
require_once 'CONFIGER.PHP';
//$ID = "";

// id to search
    $ID =$_SESSION['A'];
    
     // mysql search query
    $pdoQuery = "SELECT ID FROM basic WHERE ID = :id";
    
    $pdoResult = $db_con->prepare($pdoQuery);
    
    //set your id to the query id
    $pdoExec = $pdoResult->execute(array(":id"=>$ID));
    
    if($pdoExec)
    {
            // if id exist 
            // show data in inputs
        if($pdoResult->rowCount()>0)
        {
            foreach($pdoResult as $row)
            {
                $ID = $row['ID'];
                //$fname = $row['fname'];
                //$lname = $row['lname'];
                 header("location:result.php?ID=$ID");
				echo 'yes';
				//$age = $row['age'];
            }
        }
            // if the id not exist
            // show a message and clear inputs
        else{
            echo 'No Data With This ID';
        }
    }else{
        echo 'ERROR Data Not Inserted';
    }



?>