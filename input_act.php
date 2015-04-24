<?php
include 'koneksi.php';
$nama=$_GET['nama'];
$nim=$_GET['nim'];
$jurusan=$_GET['jurusan'];

$senin_satu=$_GET['senin_satu'];
$selasa_satu=$_GET['selasa_satu'];
$rabu_satu=$_GET['rabu_satu'];
$kamis_satu=$_GET['kamis_satu'];
$jumat_satu=$_GET['jumat_satu'];
$sabtu_satu=$_GET['sabtu_satu'];

$senin_dua=$_GET['senin_dua'];
$selasa_dua=$_GET['selasa_dua'];
$rabu_dua=$_GET['rabu_dua'];
$kamis_dua=$_GET['kamis_dua'];
$jumat_dua=$_GET['jumat_dua'];
$sabtu_dua=$_GET['sabtu_dua'];

$senin_tiga=$_GET['senin_tiga'];
$selasa_tiga=$_GET['selasa_tiga'];
$rabu_tiga=$_GET['rabu_tiga'];
$kamis_tiga=$_GET['kamis_tiga'];
$jumat_tiga=$_GET['jumat_tiga'];
$sabtu_tiga=$_GET['sabtu_tiga'];

$senin_empat=$_GET['senin_empat'];
$selasa_empat=$_GET['selasa_empat'];
$rabu_empat=$_GET['rabu_empat'];
$kamis_empat=$_GET['kamis_empat'];
$jumat_empat=$_GET['jumat_empat'];
$sabtu_empat=$_GET['sabtu_empat'];

$senin_lima=$_GET['senin_lima'];
$selasa_lima=$_GET['selasa_lima'];
$rabu_lima=$_GET['rabu_lima'];
$kamis_lima=$_GET['kamis_lima'];
$jumat_lima=$_GET['jumat_lima'];
$sabtu_lima=$_GET['sabtu_lima'];


$senin_enam=$_GET['senin_enam'];
$selasa_enam=$_GET['selasa_enam'];
$rabu_enam=$_GET['rabu_enam'];
$kamis_enam=$_GET['kamis_enam'];
$jumat_enam=$_GET['jumat_enam'];
$sabtu_enam=$_GET['sabtu_enam'];




$insert = mysql_query("insert into mahasiswa value ('$nim','$nama','$jurusan')");
$insert = mysql_query("insert into jadwal_senin value ('$nim','$senin_satu','$senin_dua','$senin_tiga','$senin_empat','$senin_lima','$senin_enam')");
$insert = mysql_query("insert into jadwal_selasa value ('$nim','$selasa_satu','$selasa_dua','$slasa_tiga','$selasa_empat','$selasa_lima','$selasa_enam')");
$insert = mysql_query("insert into jadwal_rabu value ('$nim','$rabu_satu','$rabu_dua','$rabu_tiga','$rabu_empat','$rabu_lima','$rabu_enam')");
$insert = mysql_query("insert into jadwal_kamis value ('$nim','$kamis_satu','$kamis_dua','$kamis_tiga','$kamis_empat','$kamis_lima','$kamis_enam')");
$insert = mysql_query("insert into jadwal_jumat value ('$nim','$jumat_satu','$jumat_dua','$jumat_tiga','$jumat_empat','$jumat_lima','$jumat_enam')");
$insert = mysql_query("insert into jadwal_sabtu value ('$nim','$sabtu_satu','$sabtu_dua','$sabtu_tiga','$sabtu_empat','$sabtu_lima','$sabtu_enam')");






header("location:tampil.php?nim=$nim");
?>