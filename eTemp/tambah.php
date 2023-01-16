<html>
	<head>
	<title>Rekod Suhu Pelajar</title>
	</head>
	<style>
	h2 {
		text-align: center;
		padding-top: 20px;
	}
	body {
		background-color: #7FFFD4;
	}
	</style>
	<body>
	<center>
	<h2>Borang Imbasan Suhu Pelajar </h2>
	
	<table border=0 cellpadding=5 cellspacing=1 bgcolor=white style="padding:20px;border-top:1px solid black; border-left:2px solid black; border-right:2px solid black; border-bottom:1px solid black; border-radius:10px">
	
	<form action="" method="post">
	
	<tr>
		<td>Id Pelajar</td><td>:</td><td> <input type="text" name="id_pelajar" required><br><br></td>
	</tr>
	<tr>
		<td>Nama Pelajar</td><td>:</td><td> <input type="text" name="nama_pelajar" required><br><br></td>
	</tr>
	<tr>
		<td>Kelas</td><td>:</td><td> <input type="text" name="kelas" required><br><br></td>
	</tr>
	<tr>
		<td>Suhu</td><td>:</td><td> <input type="text" name="suhu" required><br><br></td>
	</tr>
	<tr>
		<td>Tarikh</td><td>:</td><td> <input type="date" name="tarikh" required><br><br></td>
	</tr>
	<tr>
		<td>Catatan</td><td>:</td><td> <select type="text" name="catatan" required>
		<option value="Tiada Simptom">Tiada Simptom</option>
    	<option value="Demam">Demam</option>
    	<option value="Sakit Tekak">Sakit Tekak</option>
    	<option value="Batuk">Batuk</option>
    	<option value="Suhu Melebihi">Suhu Melebihi 37c</option>
  		</select><br><br></td>


	</tr>
	<tr>
		<td colspan=3><center><input type="Submit" name="hantar" value="Hantar"><br></td>
	</tr>

	</form>
	</tr>
	</table>
	</body>

<!--memproses input yang dimasukkan ke dalam db-->
<?php
	include('config.php');
	if (isset($_POST['hantar'])){
	//lengkapkan kod aturcara ini
	header('Location:index.php');
	$id_pelajar = $_POST ['id_pelajar'];
	$nama_pelajar = $_POST ['nama_pelajar'];
	$kelas = $_POST ['kelas'];
	$suhu = $_POST ['suhu'];
	$tarikh = $_POST ['tarikh'];
	$catatan = $_POST ['catatan'];

	$result = mysqli_query($connect,"INSERT INTO pelajar(id_pelajar,nama_pelajar,kelas,suhu,tarikh,catatan)"
	."VALUES('$id_pelajar','$nama_pelajar','$kelas','$suhu','$tarikh','$catatan')");
	}
?>
</html>
