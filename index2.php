<?php
error_reporting(0);
?>

<html>
    <head>
        <title>FILE UPLOAD LAHANAT</title>
    </head>

    <body>

    <center>
		<h2>INDEX 2 </h2>
	</center>
	<table border="1" width="800" align="center" cellspacing="2"
    cellpadding="2">
    <tr>
    	<td>ID</td>
    	<td>GAMBAR</td>
   	</tr>

     <form action="#" method="POST" enctype="multipart/form-data">
        <input type="file" name="uploadfile"><br><br>
         <input type="submit" name="submit" value="Upload File">
    </form>
 </body>
 </html>
 <?php

//print_r($_FILES["uploadfile"]);
$filename = $_FILES["uploadfile"]["name"];
$tempname =  $_FILES["uploadfile"]["tmp_name"];
$folder = "image/". $filename;
 echo $folder;
 move_uploaded_file($tempname, $folder);
 
 
?>
