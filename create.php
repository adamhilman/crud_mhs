<?php
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
#$gambar2 = $_FILES['gambar']['name'];
$gambar = uniqid(rand());
$mysqli->query("INSERT INTO mahasiswa(nim,nama,jurusan,alamat,gambar) VALUES ('$nim','$nama','$jurusan','$alamat','$gambar')");
move_uploaded_file($_FILES['gambar']['tmp_name'],'images/'.$gambar);
header('location:index.php');
?>