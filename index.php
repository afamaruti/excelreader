<html>
<head>
	<title>Import Excel Ke MySQL dengan PHP</title>
</head>
<body>
	<style type="text/css">
		body{
			font-family: sans-serif;
			text-align: center;
		}
 
		p{
			color: green;
		}
	</style>
	<h2>IMPORT EXCEL KE MYSQL DENGAN PHP</h2>

	<?php 
	if(isset($_GET['berhasil'])){
		echo "<p>".$_GET['berhasil']." Data berhasil di import.</p>";
	}
	?>
 
	<a href="upload.php">IMPORT DATA</a>
	<table border="1">
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Telepon</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no=1;
		$tampil = mysqli_query($koneksi,"SELECT * FROM data_pegawai");
		while($d = mysqli_fetch_array($tampil)) :
			?>
			<tr>
				<th><?php echo $no++; ?></th>
				<th><?php echo $d['nama']; ?></th>
				<th><?php echo $d['alamat']; ?></th>
				<th><?php echo $d['telepon']; ?></th>
			</tr>
		<?php 
		endwhile;
		?>
	</table> 
</body>
</html>