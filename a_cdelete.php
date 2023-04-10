<?php


$id=$_GET['id'];

include 'db_connect.php';
$sql="UPDATE `cars` SET status = '3' WHERE carid = '$id'";
if(mysql_query($sql,$conn))
	echo "<script>alert(' Deleted!');location.href='a_capproved.php';</script>";
     else
     	{"<script>alert('error!');location.href='a_viewcar.php';</script>";
		}

?>