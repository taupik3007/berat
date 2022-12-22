<?php
include 'koneksi.php';

$nama_barang = $_POST['nama_barang'];
$jumlah_barang = $_POST['jumlah_barang'];
$jenis_barang = $_POST['jenis_barang'];
$id_barang = $_POST['id'];



$data = mysqli_query($koneksi,"UPDATE `manajemen_barang` SET `nama_barang`='$nama_barang',`jumlah_barang`='$jumlah_barang',`jenis barang`='$jenis_barang' WHERE `id` = $id_barang ");
header("location:daftar_barang.php");


