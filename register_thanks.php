<?php
session_start();
include "connection.php";

//If Email already exists, do not insert
$sql = "SELECT * FROM `Users` WHERE `email` = '$_POST[email]' ";
$res = $db->query($sql);
$row = $res->fetch_array();
if($row) {

	$_SESSION['save_data'] = $_POST;
	header("Location: register.php?msg=1");
	die("Stop Here");
}

$t = time();
$md5 = md5($_POST['password']);

$sql = "INSERT INTO `Users` (`id`, `fullname`, `email`, `password`, `timestamp`, `status`) VALUES (NULL, '$_POST[fullname]', '$_POST[email]', '$md5', '$t', 'new');";
$res = $db->query($sql);

header("Location: index.php?msg=Registration Successful");




