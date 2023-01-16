<!--membuat sambungan ke db-->
<?php
	include('config.php');
	$result = mysqli_query($connect,"SELECT * FROM pelajar");
?>

<html>
	<head>
	<title>Senarai Pelajar</title>
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
	<h2>REKOD IMBASAN SUHU PELAJAR</h2>
	<center>
	<table border=1 cellpadding=5 cellspacing=0 bgcolor=white>
		<tr>
		<th>ID PELAJAR</th>
		<th>NAMA PELAJAR</th>
		<th>KELAS</th>
		<th>SUHU</th>
		<th>TARIKH</th>
		<th>CATATAN</th>
		<th>PADAM</th>
		
		</tr>
	  
		<!--memaparkan rekod staf-->
		<?php
	    $no=1;
		$papar=mysqli_query($connect, "SELECT * FROM pelajar");
		while($row=mysqli_fetch_array($papar)){
			 
		echo "
		<tr>
			<td>".$row['id_pelajar']."</td>
			<td>".$row['nama_pelajar']."</td>
			<td>".$row['kelas']."</td>
			<td>".$row['suhu']."</td>
			<td>".$row['tarikh']."</td>
			<td>".$row['catatan']."</td>
			<td>","<a  href=\"padam.php?id_pelajar=".$row['id_pelajar']. "\" Onclick=\"return confirm('Rekod ini akan dihapuskan')\">Padam</td>

				
		</tr>
		";
		
		}
		?>		  
	</table>
	<p><a href="tambah.php"><button name='tambah'type="submit">&#43; TAMBAH PELAJAR</button></a></p>
	
	</center>
	</body>
</html>