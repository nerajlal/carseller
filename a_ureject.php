<?php


$id=$_GET['id'];

include 'db_connect.php';
$sql="UPDATE `login` SET status = '2' WHERE email = '$id'";
if(mysql_query($sql,$conn))
	echo "<script>alert(' Rejected!');location.href='a_ureq.php';</script>";
     else
     	{"<script>alert('error!');location.href='a_ureq.php';</script>";
		}

?>