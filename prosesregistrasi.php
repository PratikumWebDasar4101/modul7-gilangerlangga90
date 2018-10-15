<?php

require_once("db.php");
$nim				= $_POST['nim'];
$nama 				= $_POST['nama'];
$jenis_kelamin		= $_POST['jenis_kelamin'];
$prodi				= $_POST['prodi'];
$fakultas			= $_POST['fakultas'];
$asal				= $_POST['asal'];
$motto				= $_POST['motto'];

$sql = "INSERT INTO mahasiswa (nim, nama, jenis_kelamin, prodi, fakultas, asal, motto)
		VALUES ('$nim', '$nama', '$jenis_kelamin', '$prodi', '$fakultas', '$asal', '$motto')";

if (mysqli_query($conn, $sql)) {
	echo "Data berhasil disimpan! <br>";
	echo "Lihat Data";
    echo "<a href='lihatdata.php' style='text-decoration: none;'> Disini </a>";
} else {
	echo "Error: ". $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);