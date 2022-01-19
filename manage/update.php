<?php
include '../config.php';
include 'auth.php';
//echo 'You are logged in as: ' . $data['username'];

$id=mysql_real_escape_string ($_GET['id']);
$page=mysql_real_escape_string($_GET['page']);

$query="update hai_deadlycover_data set deleted=1 where id='$id'";
mysql_query($query);

header('location: view.php?page=');
?>