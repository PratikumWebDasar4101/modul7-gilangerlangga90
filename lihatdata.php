<?php
require_once("db.php");
?>

<table>
	<a href="registrasi.html"> Input Data </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<form method="GET" action="search.php">
	<input type="text" name="search" id="search"> <input type="submit" name="cari" value="Cari">
	</form>
</table>

<br> <br>

<table border="1">
	<thead>
		<th> Nama </th>
		<th> NIM </th>
		<th> Aksi </th>
	</thead>

	<body>
		<?php
		$sql = "SELECT * FROM mahasiswa";
		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
				?>
				 <tr>
				 	<td><?php echo $row["nama"] ?></td>
				 	<td><?php echo $row["nim"] ?></td>
				 	<td> <a href='delete.php?id=<?php echo $row['id']?>'> Delete </a> </td>
				</tr>
				<?php
			}
		}else{
			echo "Data tidak tersedia";
		}

		mysqli_close($conn);
		?>
	</body>
</table>