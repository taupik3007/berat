<?php
    include 'koneksi.php';

      $username= $_POST['username'];
     $password = $_POST['password'];

   $encrypt= md5($password);

    $cek_username=mysqli_query($koneksi,"SELECT * FROM `user` where `username` = '$username'");
     $cek_user= mysqli_num_rows($cek_username);

    if($cek_user == 1){
        $cek_password = mysqli_query($koneksi,"SELECT * FROM `user` where `username` = '$username' && `password` = '$encrypt'");
        $cek_psw = mysqli_num_rows($cek_password);
        if($cek_psw == 1){
            $data = mysqli_fetch_array($cek_password);
            // echo "berhasil login";


                session_start();
                $_SESSION['username'] = $username;
                $_SESSION['nama']= $data['nama'];
                header("location:beranda.php");


        }else{
            echo "password salah";
        }

    }else{
        // header("location:login.php");
        echo "username tidak temukan";
    }




?>