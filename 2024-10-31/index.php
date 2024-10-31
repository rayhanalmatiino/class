<?php 

$identitas = ["nama" => "Achmad Rayhan Al Matiino",
            "alamat" => "Ds Ental Sewu",
            "telepon" => "0822-1736-6651",
            "email" => "ralmatiino05@gmail.com",
            "facebook" => "Al Al",
            "instagram" => "telurbarongsai",
            "tiktok" => "happy boy"];

$sekolah = ["Tk" => "Dharma Wanita",
            "Sd" => "Sdn Ental Sewu",
            "Smp" => "Smp Sepuluhm Nopember Sidoarjo",
            "Smk" => "SMKN 2 Buduran Sidoarjo",
            "S1"  => "Institut Teknologi Sepuluh Nopember",
            "S2" => "The University Of Tokyo",
            "S3"  => "Massachusetts Institute Of Technology"];

$hobby = ["hobby" => "Sepak Bola","Futsal","Main Game", "Mendengarkan Musik",
          "Melihat Film"];

$skill = ["c++" => "Expert",
          "html" => "Newbie",
          "CSS" => "Intermediate",
          "PHP" => "Newbie"];


$deskripsi = "saya memiliki nama achmad rayhan al matiino,<br>
            saya memiliki hobi bermain sepakbola dan mendengarkan musik,<br>
            saya sekarang bersekolah di smkn 2 buduran sidoarjo <br>
            yang dulu  nya saya adalah seorang alumni di smp 10 nopember <br>
            saya memiliki kulit sawo matang dan rambut yang ikal";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Daftar Riwayat Hidup</title>
<style>.container {width: 300px; margin: auto;}</style>

</head>
<body>
    <div class="container">
        <h1>DAFTAR RIWAYAT HIDUP</h1>
        <h2>Data Diri</h2>
        <table border= 1px>
            <thead>
                <tr>
                    <th>Data</th>
                    <th>deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($identitas as $key => $value){
                    ?>
                    <tr>
                        <td><?= $key?></td>
                        <td><?= $value?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <hr>
        <h2>Riwayat Pendidikan</h2>
        <table border =2px >
            <thead>
                <tr>
                    <th>Pendidikan</th>
                    <th>Nama Sekolah</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($sekolah as $key => $value) {
                    ?>
                    <tr>
                        <td><?= $key?></td>
                        <td><?= $value?></td>
                    </tr
                    <?php
                }
                ?>
                ?>
            </tbody>
        </table>
        <hr>
        <h2>Skill level</h2>
        <table border = 2px>
            <thead>
                <tr>
                    <th>skill</th>
                    <th>tingkatan</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($skill as $key => $value) {
                    ?>
                    <tr>
                        <td><?= $key?></td>
                        <td><?= $value?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <hr>
        <h2>Hobby</h2>
        <ul>
            <?php 
            foreach ($hobby as $key) {
               ?>
               <li><?= $key?></li>
               <?php 
            }?>
        </ul>
        <hr>
        <h2>Tentang Saya</h2>
        <p><?= $deskripsi?></p>
    </div>
</body>
</html>