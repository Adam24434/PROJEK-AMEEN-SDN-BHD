<html>
    <head>
        <title>PROJEK SEKOLAH</title>
    </head>
    
    <body>
    <center>
		<h2>INDEX 1</h2>
	</center>
	<table border="1" width="800" align="center" cellspacing="2"
    cellpadding="2">
    <tr>
    	<td>ID</td>
    	<td>GAMBAR</td>
   	</tr>
<a style="text-decoration: none;" href="upload.php">PAGE UPLOAD</a>

       <?php 
	include('config.php');
		$result=mysqli_query($connect,"SELECT*FROM image");
    while($row=mysqli_fetch_array($result)){
        $id=$row['id'];
        $filename = $row['filename'];
           echo '<tr>
        <td>' . $id . '</td>
        <td><img src=' . $filename . '/></td>
        </tr>';
    }
    '</table>'
	 ?>



    </body>
</html>