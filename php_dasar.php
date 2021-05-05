<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>PHP Dasar bre</title>
</head>
<body>
<div class="login">
    <h1>Belajar <span>PHP</span> Dasar</h1>
    <form method="post">
        <label>Nama : <br></label>
        <input type="text" name="nama" placeholder="Masukan nama">
        <br>
        <label>Tanggal Lahir : <br></label>
        <input type="date" name="datebirth">
        <br>
        <label>Pekerjaan : <br></label>
        <input type="radio" name="pekerjaan" value="IT Support">IT Support</input>
        <input type="radio" name="pekerjaan" value="Web Developer">Web Developer</input>
        <input type="radio" name="pekerjaan" value="UI/UX Designer">UI/UX Designer</input>
        <br>
        <br>
        <input type="submit" name="button" value="Print">
        <br>
        <br>

    <?php
    $lahir = @$_GET['datebirth'];
    $button = @$_POST['button'];

    if ($button) {

        $nama=$_POST['nama'];
        $job=@$_POST['pekerjaan'];
        echo "<p>Nama : $nama</p>";
        
        $tanggal_lahir = new DateTime($_POST['datebirth']);
        $sekarang = new DateTime("today");
        if ($tanggal_lahir > $sekarang) { 
            $thn = "0";
            $bln = "0";
            $tgl = "0";
        }
        $thn = $sekarang->diff($tanggal_lahir)->y;
        $bln = $sekarang->diff($tanggal_lahir)->m;
        $tgl = $sekarang->diff($tanggal_lahir)->d;

        echo "<p>Umur : ";
        echo $thn." Tahun ".$bln." Bulan ".$tgl." Hari";
         
        if ($job=='IT Support') {
            echo "<p>Pekerjaan : $job</p> ";
            echo "<p>Gajinya : Rp. 5.500.000/bulan</p>";
        }

        elseif ($job=="Web Developer") {
            echo "<p>Pekerjaan : $job</p> ";
            echo "<p>Gajinya : Rp. 7.500.000/bulan</p>";
        }

        elseif ($job=="UI/UX Designer") {
            echo "<p>Pekerjaan : $job</p> ";
            echo "<p>Gajinya : Rp. 7.000.000/bulan</p>";
        }

        else {
            echo "<p>Pilih pekerjaan dulu</p>";
        }

        echo "<br><br><p class=foot>Rangga Tito Prayogo - 311910036</p>";
    }
    ?>
    </form>
</div>
</body>
</html>