<?php

include "koneksi.php";
$id=$_POST['id_peternak'];
$nama=$_POST['nama'];
$tempat_lahir=$_POST['tempat_lahir'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$pendidikan=$_POST['pendidikan'];
$mulai_beternak=$_POST['mulai_beternak'];
$kelompok_ternak=$_POST['kelompok_ternak'];
$alamat=$_POST['alamat'];


$ubah=$koneksi->query("update profil_peternak set nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', pendidikan='$pendidikan', mulai_beternak='$mulai_beternak', kelompok_ternak='$kelompok_ternak', alamat=$'alamat' where id_peternak='$id'");

if($ubah==true){

    header("location:tampil_profil.php?pesan=editBerhasil");
} else{
    echo"Error";
}



?>