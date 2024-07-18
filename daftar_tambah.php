<?php
 include("koneksi.php");

    $nama = $_POST['nama']; 
    $email = $_POST['email']; 
    $alamat = $_POST['alamat']; 
    $nohp = $_POST['no-hp']; 
    $semester = $_POST['semester']; 
    $ipk = $_POST['ipk']; 
    $beasiswa = $_POST['pilihan-beasiswa']; 
    $syarat = $_POST['syarat'];


    $query = mysqli_query($con, "INSERT INTO beasiswa SET
    nama = '$nama',
    email = '$email',
    alamat = '$alamat',
    hp = '$nohp',
    semester = '$semester',
    ipk = '$ipk',
    jenis_beasiswa = '$beasiswa',
    syarat = '$syarat',
    status_pengajuan = 'Belum diverifikasi'");

    if($query){
        echo "Data berhasil disimpan!";
        header('Location: hasil.php');
    }else{
        echo "Tidak dapat menyimpan data!<br>";
        echo "mysqli_error()";
    }
?>