<?php
include "connect.php";

if (isset($_POST['Kirim'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $Alamat = $_POST['Alamat'];
    $Kecamatan = $_POST['Kecamatan'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_telpon = $_POST['no_telpon'];
    $email = $_POST['email'];
    $file = $_POST['file'];

    $simpan = "INSERT INTO adhimix_karawang(nama_lengkap,Alamat,Kecamatan,tempat_lahir,tanggal_lahir,jenis_kelamin,no_telpon,email,file)
        VALUES('$nama_lengkap','$Alamat','$Kecamatan','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$no_telpon','$email','$file')";

    $result = mysqli_query($conn,$simpan);

    if ($result) {
        echo "<script>alert('Data anda telah berhasil di kirim, silahkan tunggu balasan di email anda');window.location='index.php'</script>";
    } else{
        echo "<script>alert('Data anda tidak dapat dikirim, harap isi dengan benar');window.location='index.php'</script>";
    }
}
?>