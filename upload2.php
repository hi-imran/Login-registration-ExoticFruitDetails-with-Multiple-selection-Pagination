<?php
include "connection.php";
 
 if(isset($_POST['submit']))
 {
    //$name       = $_FILES['file']['name'];  
    $temp_name  = $_FILES['file']['tmp_name'];
    $size  = $_FILES['file']['size'];  
     if($size>0)
     {
         $file = fopen($temp_name,"r");
         while(($column=fgetcsv($file,1000,","))!==FALSE)
         {
            $sqlInsert = "INSERT INTO `wgt`(`pname`, `image`, `price`, `title`, `desc`, `timestamp`) VALUES ('".$column[0]."','".$column[1]."','".$column[2]."','".$column[3]."','".$column[4]."','".$column[5]."')"; 
            //$sqlInsert = "INSERT INTO `students`(`student_name`,`age`,`city`) VALUES ('".$column[0]."','".$column[1]."','".$column[2]."')"; 
             $result = mysqli_query($db,$sqlInsert); 
            
         }
         if(!empty($result)){
            echo "CSV Data Imported into database";
        }
        else
        {
           echo "CSV Data not Imported into database";
            
        }
     }
 }
 header("Location: show2.php");
?>