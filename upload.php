<?php 
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Import Excel Ke MySQL dengan PHP</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
 
	p{
		color: green;
	}
</style>
<h2>IMPORT EXCEL KE MYSQL DENGAN PHP</h2> 
 
<a href="index.php">Kembali</a>
<br/><br/>
 
<form method="POST" enctype="multipart/form-data" action="upload_aksi.php">
       Pilih File :
        <input type="file" name="filepegawai" required/>
        <button type="submit" name="upload" value="Import">Import</button>
</form>
 
<br/><br/> 
</body>
</html>

