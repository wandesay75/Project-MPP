<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LOKER-KRW </title>
    <link rel="stylesheet" type="text/css" href="../css/style_form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="logo2">
            <img src="../gambar/Logo.png" alt="mylogo" title="Loker Karawang">
        </div>
    </header>
    <div class="wrap">
        <div class="container text-center">
            <img src="../gambar/Pupuk_Kujang.png" class="logo">
            <h1>APPLY JOB - PT. Pupuk Kujang</h1><br>
            <form action="form_add_aksi.php" method="POST">
                <table>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><input type="text" name="nama_lengkap" class="form-control" placeholder="masukan nama anda"></td>
                    </tr>
                    <tr>
                        <td>Alamat Rumah</td>
                        <td>:</td>
                        <td><textarea name="Alamat" class="form-control" placeholder="masukan alamat rumah anda"></textarea></td>
                    </tr>
                    <tr>
                        <td>Kecamatan</td>
                        <td>:</td>
                        <td>
                            <select name="Kecamatan" class="form-control">
                                <option class="text-center">--Pilih Kecamatan--</option>
                                <option>Banyusari</option>
                                <option>Batujaya</option>
                                <option>Ciampel</option>
                                <option>Cibuaya</option>
                                <option>Cikampek</option>
                                <option>Cilamaya Kulon</option>
                                <option>Cilamaya Wetan</option>
                                <option>Cilebar</option>
                                <option>Jatisari</option>
                                <option>Jayakerta</option>
                                <option>Karawang Barat</option>
                                <option>Karawang Timur</option>
                                <option>Klari</option>
                                <option>Kota Baru</option>
                                <option>Kutawaluya</option>
                                <option>Lemahabang</option>
                                <option>Majalaya</option>
                                <option>Pakisjaya</option>
                                <option>Pangkalan</option>
                                <option>Pedes</option>
                                <option>Purwasari</option>
                                <option>Rawamerta</option>
                                <option>Rengasdengklok</option>
                                <option>Tegalwaru</option>
                                <option>Telagasari</option>
                                <option>Telukjambe Timur</option>
                                <option>Telukjambe Barat</option>
                                <option>Tempuran</option>
                                <option>Tirtajaya</option>
                                <option>Tirtamulya</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Tanggal Lahir</td>
                        <td>:</td>
                        <td><input type="text" name="tempat_lahir" class="form-control" placeholder="masukan tempat lahir anda"></td>
                        <td><input type="date" class="form-control" name="tanggal_lahir"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><input type="radio" name="jenis_kelamin"  value="Laki-Laki">Laki-Laki</td>
                        <td><input type="radio" name="jenis_kelamin"  value="Perempuan">Perempuan</td>
                    </tr>
                    <tr>
                        <td>Nomor Telepon</td>
                        <td>:</td>
                        <td><input type="number" name="no_telpon" class="form-control" placeholder="masukan nomor yang dapat dihubungi"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><input type="text" name="email" class="form-control" placeholder="masukan email anda dengan benar"></td>
                    </tr>
                    <tr>
                        <td>Masukan CV Anda</td>
                        <td>:</td>
                        <td><input type="file" name="file"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <button type="submit" class="btn-primary" name="Kirim" >Kirim</button>
                            <button type="reset" class="btn-primary" name="Batal" >Batal</button></a>
                        </td>
                        </td>
                    </tr>
                </table>
            </form>
            <a href="../loker.html"><button class="btn-primary2">Kembali</button></a>
        </div>
    </div>
    <div>
        <table>
            <td></td>
        </table>
    </div>
<section id="footer">
    <img src="../gambar/Logo LOKER.png" class="footer-image" alt="my-logo2" title="LOKER Karawang">
    <h1><b> Copyright © 2022 </b></h1>
    <p> By Kelompok 1 MPP</p>
</section>
</body>
</html>