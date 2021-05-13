<?php
include "connection.php";
include "login_check.php"; 

if(isset($_GET['del_id']))
{
	$sql = "DELETE FROM `wgt` WHERE `id` = $_GET[del_id]";
	$db->query($sql);
	header("Location: show2.php");
}
?>