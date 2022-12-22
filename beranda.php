<?php
session_start();
if($_SESSION['username']== null){
        header("location:login.php");
    
}

echo $_SESSION['username'];
echo $_SESSION['nama'];
?>
<br>
<a href="logout.php">logout</a>
