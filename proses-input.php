<?php

include "koneksi.php";
$id_peternak=$_POST['id_peternak'];
$nama=$_POST['nama'];
$tempat_lahir=$_POST['tempat_lahir'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$pendidikan=$_POST['pendidikan'];
$mulai_beternak=$_POST['mulai_beternak'];
$kelompok_ternak=$_POST['kelompok_ternak'];
$alamat=$_POST['alamat'];

$simpan=$koneksi->query("insert into profil_peternak(id_peternak,nama,tempat_lahir,tanggal_lahir,pendidikan,mulai_beternak,kelompok_ternak,alamat) 
                        values('$id_peternak','$nama','$tempat_lahir','$tanggal_lahir','$pendidikan','$mulai_beternak','$kelompok_ternak','$alamat')");

if($simpan==true){

    header("location:tampil_profil.php?pesan=inputBerhasil");
} else {
    echo "Error";
}


?>