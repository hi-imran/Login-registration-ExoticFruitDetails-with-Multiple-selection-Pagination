<?php

include "connection.php";
include "login_check.php";

if(isset($_POST['submit'])) 
{
	
	$sql = "UPDATE `wgt` 
			SET `pname` = '$_POST[pname]', `price` = '$_POST[price]', `title` = '$_POST[title]', `desc` = '$_POST[desc]' 
			WHERE `id` = '$_POST[id]' ";
	$db->query($sql);

	if($_FILES['myfile']['name'])
	{
		$name = $_FILES['myfile']['name'];
		print $name;
		
        $tmp = explode(".", $_FILES['myfile']['name']);
        $ext = strtolower(trim(end($tmp)));
        print $ext;

        $myfile_path = "user_uploads/".$id."_". $_FILES['myfile']['name'];

        if($ext == "jpg" || $ext == "jpeg" || $ext == "png" || $ext == "gif" ) 
        {
            copy($_FILES['myfile']['tmp_name'], $myfile_path);

            //Delete Old myfile if any
            $sqlX = "SELECT * FROM `wgt` WHERE `id` = '$id' ";
            $resX = $db->query($sqlX);
            $rowX = $resX->fetch_array();
            @unlink($rowX['myfile']);

            $sql = "UPDATE `wgt` SET  `image` = '$myfile_path' WHERE `id` = '$id' ";
            $db->query($sql);
    	}
    } 
}
header("Location: show2.php");


if(isset($_POST['pname']))
{
	@mkdir("user_uploads");

	$time = time();

	$name = $_FILES['myfile']['name'];
	$type = $_FILES['myfile']['type'];
	$size = $_FILES['myfile']['size'];

	$save_path = "user_uploads/".time()."_".$name;	

	$arr = explode(".", $name);
	$ext = strtolower(trim(end($arr)));

	if($ext == "jpg" || $ext == "jpeg" || $ext == "png" || $ext == "gif")
	{
		copy($_FILES['myfile']['tmp_name'], $save_path);

		$sql = "INSERT INTO `wgt` (`id`, `pname`, `image`, `price`, `title`, `desc`, `timestamp`) VALUES (NULL, '$_POST[pname]', '$save_path', '$_POST[price]', '$_POST[title]', '$_POST[desc]', '$time')";
		$db->query($sql);
		print "Inser";
		header("location: show2.php");

	}
	else {
	print "The File ".$name." ($type) size $size bytes  is NOT a Valid Image";
}
}
?>
