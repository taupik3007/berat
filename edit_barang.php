<?php
include 'koneksi.php';
$id= $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM `manajemen_barang`where `id` = $id");
$barang = mysqli_fetch_array($data);






?>
<form action="update_barang.php" method="POST">
<input type="text" hidden="" name="id" value="<?php echo $barang['id']?>">
<input type="text" name="nama_barang" value="<?php echo $barang['nama_barang']; ?>" ><br><br>
<input type="text" name = "jumlah_barang" value="<?php echo $barang['jumlah_barang']; ?>"><br><br>
<input type="text" name="jenis_barang" value="<?php echo $barang['jenis barang']; ?>"><br><br>
<input type="submit" value="tambah">



</form>