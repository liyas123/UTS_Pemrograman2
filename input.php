<!doctype html>
<html>
<head>
        <tittle><center>ISI DATA DI BAWAH INI</tittle></center>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body>
        <div class="container">
        <div class="row">
        <div class="col-md-12">

         <form action="proses-input.php" method="post">
                    <div class="form-group">
                 <label for="nim"><b>Id Peternak</b></label>
                <Input type="text" name="id_peternak" class="form-control">
            </div>
            <div class="form-group">
                <label for="nim"><b>Nama</b></label>
                <Input type="text" name="nama" class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>Tempat Lahir</b></label>
                <Input type="text" name="tempat_lahir"class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>Tanggal Lahir</b></label>
                <Input type="date" name="tanggal_lahir"class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>Pendidikan</b></label>
                <Input type="text" name="pendidikan"class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>Mulai Beternak</b></label>
                <Input type="date" name="mulai_beternak"class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>Kelompok Ternak</b></label>
                <Input type="text" name="kelompok_ternak"class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>Alamat</b></label>
                <Input type="text" name="alamat"class="form-control">
            </div>


            <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
            <input type="reset" name="kosongkan" value="KOSONGKAN"class="btn btn-danger">
          
        </form>
</div></div></div>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>