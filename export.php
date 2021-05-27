<?php  
$db = new mysqli("localhost","root","","practice");

$sql = "SELECT * FROM `wgt`"; 
$setRec = $db->query($sql); 
 
$columnHeader = '';  
$columnHeader = "User Id" . "\t" . "Product Name" . "\t" . "Image" ."\t". "Price". "\t". "Title". "\t". "Description". "\t". "Timestamp". "\t";  
$setData = '';  
  while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value =  $value  . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
header("Content-type: application/octet-stream"); //This declares the file as a binary and setting its type.This enables the browsers to treat the file as a binary. Note that application/octet-stream can be used to dynamically refer to all file types. 
header("Content-Disposition: attachment; filename=students.xls");//The HTTP Header string parameter is set to Content-Disposition: attachment. This forces the browser to display a download dialog box, thereby making the download possible. 
header("Pragma: no-cache");  
header("Expires: 0");  

echo ucwords($columnHeader) . "\n" . $setData . "\n";
 ?> 
 