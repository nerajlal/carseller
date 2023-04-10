<?php


$k=$_GET['id'];

include 'db_connect.php';
$sql="UPDATE `cars` SET status = '1' WHERE carid = '$k'";
if(mysql_query($sql,$conn))
	echo "<script>alert(' Buyed!');location.href='a_viewcar.php';</script>";
     else
     	{
     		"<script>alert('error!');location.href='a_viewcar.php';</script>";
		}

$sq="UPDATE `cars` SET seller_ph = '8547470675' WHERE carid = '$k'";
if(mysql_query($sq,$conn))
	echo "<script>alert(' Buyed!');location.href='a_viewcar.php';</script>";
     else
     	{
     		"<script>alert('error!');location.href='a_viewcar.php';</script>";
		}

?>