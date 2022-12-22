<?php
include 'koneksi.php';

$data = mysqli_query($koneksi,"SELECT * FROM `manajemen_barang`");
?>
<a href="tambah_barang.php">tambah barang</a><br>

<?php

foreach($data as $data){
    echo $data['nama_barang'];
    echo $data['jumlah_barang'];
    echo $data['jenis barang'];
    ?>
    <a href="hapus_barang.php?id=<?php echo $data['id'] ?>">hapus</a>
    <a href="edit_barang.php?id=<?php echo $data['id'] ?>">edit</a>
    
    
    <?php
}
