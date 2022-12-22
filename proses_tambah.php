<?php

$nama_barang = $_POST['nama_barang'];
$jenis_barang = $_POST['jenis_barang'];
$jumlah_barang = $_POST['jumlah_barang'];

include 'koneksi.php';

$data = mysqli_query($koneksi,"INSERT INTO `manajemen_barang`( `nama_barang`, `jumlah_barang`, `jenis barang`) VALUES ('$nama_barang','$jumlah_barang','$jenis_barang')");
header("location:daftar_barang.php");
