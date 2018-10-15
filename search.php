<?php
require_once("db.php");

if(isset($_GET['search']) && $_GET['search']){
	$conn = mysqli_connect("localhost", "root", "", "universitas");
	$search = $_GET['search'];
	$sql = "SELECT * FROM mahasiswa where nim like '%$search%' or 
	nama like '%$search%'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0){
		?>
		<table border="1">
			<tr>
				<td>Nama</td>
				<td>NIM</td>
				<td>Aksi</td>
			</tr>
			<?php
			while($row = mysqli_fetch_assoc($result)){?>
			<tr>
				<td><?php echo $row["nama"] ?></td>
				<td><?php echo $row["nim"] ?></td>
				<td> <a href='delete.php?id=<?php echo $row['id']?>'> Delete </a> </td>
			</tr>
			<?php }?>
		</table>
		<?php
	}else{
		echo 'Data tidak ditemukan!';
	}
}
?>