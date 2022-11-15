<!doctype html>
<html>
<head>
    <tittle> </tittle>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="DataTables/datatables.min.css" rel="stylesheet">

</head>
    <body>
        <div class="container">
        <div class="row">
        <div clas="col-md-12">
        <h1> Profil Peternak</h1>
<?php

if(@$_GET['pesan']=="inputBerhasil"){


?>
<div class="alert alert-success">
    Penyimpanan Berhasil!
</div>

<?php
}
?>
        <?php

        if(@$_GET['pesan']=="hapusBerhasil"){


        ?>
        <div class="alert alert-success">
            Data Berhasil DiHapus!
        </div>

        <?php
        }
        ?>
        
                <?php

                if(@$_GET['pesan']=="editBerhasil"){


                ?>
                <div class="alert alert-success">
                    Perubahan Berhasil!
                </div>

                <?php
                }
                ?>

<table id="datatables" class="table table-bordered">
    <thead>
    <tr> 
        <td><center><b>id peternak</center></td>
        <td> <center><b> nama </center></td> <td> <center><b>tempat lahir </center></td>
        <td><center><b>tanggal lahir </center></td> <td> <center><b>pendidikan </center></td>
            <td><center><b>mulai beternak</center></td> <td> <center><b>kelompok ternak</center></td>
                <td><center><b>alamat</center></td>

        <th> 
            <a href="input.php">
                <button class="btn btn-info glyphicon glyphicon-plus"></button>
            </a>
        </th>
    </tr>
</thead>
<tbody>
<?php  
   include "koneksi.php";
   $sql=$koneksi->query("select * from profil_peternak order by id_peternak ASC");

   while($row= $sql->fetch_assoc()){
?>
   <tr>
         <td> <center> <?php echo $row['id_peternak'] ?> </center> </td>
         <td> <center> <?php echo $row['nama'] ?> </center> </td>
         <td> <center> <?php echo $row['tempat_lahir'] ?> </center> </td>
         <td> <center> <?php echo $row['tanggal_lahir'] ?> </center> </td>
         <td> <center> <?php echo $row['pendidikan'] ?> </center> </td>
         <td> <center> <?php echo $row['mulai_beternak'] ?> </center> </td>
         <td> <center> <?php echo $row['kelompok_ternak'] ?> </center> </td>
         <td> <center> <?php echo $row['alamat'] ?> </center> </td>




         <td>
         <a href="edit-profil.php?id=<?php echo $row['id_peternak']?>">
                <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
            </a>
        <a href="hapus.php?id=<?php echo $row['id_peternak']?>" onclick="return confirm('anda yakin ingin menghapus data?')">
        <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
            </a>

   </td>
   </tr>
<?php
 }
?>
</tbody>
</table>
</div> </div></div>
        <script src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>

        <script src="DataTables/datatables.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                $('#datatables').DataTable();
            });
        </script>
        <a href="index.php" class="btn btn-primary">back </a>
        <a href="logout.php" class="btn btn-primary">logout </a>

</body>
</html>