<?php

$id = $_GET['id'];
include 'koneksi.php';
$data = mysqli_query($koneksi,"DELETE FROM `manajemen_barang` WHERE `id`=$id ");
header("location:daftar_barang.php");



