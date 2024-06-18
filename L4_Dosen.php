<?php
    $nama_mhs = "Ariel Tatum";
    $nama_kamu = "Andi Motor";
    $pekerjaan = "Guru";
    $jk = "";
    $penghasilan_perbulan = 0;
    
    if ($nama_mhs == "Ariel Tatum"){
        if($pekerjaan == "Aktris"){
            $jk = "Perempuan";
            $penghasilan_perbulan = 1000000000;
        } else{
            $jk = "Perempuan";
            $penghasilan_perbulan = 2000000000;
        }
    } else if($nama_kamu == "Andi"){
        $jk = "Laki-laki";
    } else {
        $jk = "??"; 
    }

    echo "Halo " .$nama_mhs. "<br>Selamat datang, saya " .$nama_kamu. "<br>jenis kelamin kamu adalah " .$jk. "<br>penghasilan anda " .$penghasilan_perbulan;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4_KampusKlik</title>
</head>

<body>
</body>

</html>