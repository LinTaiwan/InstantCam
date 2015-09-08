<?php
 	$linkID = mysql_connect('localhost','root','student');
 	mysql_select_db('ch8');
 	$sql= "SELECT image FROM wordpost WHERE image_name = '".$_GET['imageName']."';";
 	$result = mysql_query($sql, $linkID);
 	
 	$image = mysql_fetch_row($result);
	echo "圖片是否正確";
 	header('Content-Type: image/jpeg');
 	echo $image[0];
	
 ?>