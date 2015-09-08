<meta http-equiv="content-type" content="text/html"; charset=UTF-8>
<?php
 if($_FILES['filename']['name']){
 	$linkID = mysql_connect('localhost','root','student');
 	mysql_select_db('ch8');

 	$image = addslashes(file_get_contents($_FILES['filename']['tmp_name']));
 	$image_name = addslashes($_FILES['filename']['name']);
 	$sql= "INSERT INTO product_images (image, image_name) VALUES ('{$image}', '$image_name')";
 	if (!mysql_query($sql)){
 		echo "<h2><br>Save image failed...Please choose small size pics (<1M),</h2>";
		echo "<br><h2>Sorry about that! (you can do phone screen shot to get small size pic thank you!)</h2>";
 	}else{
 		echo '<a href = "showImage.php?imageName='.$image_name.'">顯示圖片</a>';
 	} 
	
 }
 ?>