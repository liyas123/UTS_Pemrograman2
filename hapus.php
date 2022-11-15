<?php
$id=$_GET['id'];

include "koneksi.php";
$hapus=$koneksi->query("delete from profil_peternak where id_peternak='$id'");

if($hapus==true){

    header("location:tampil_profil.php?pesan=hapusBerhasil");

}else{
    echo"Error"; 
}


?>