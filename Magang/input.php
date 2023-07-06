<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Input Data</title>
</head>
<body>
<form action="" method="post">
<div class="container mt-3">
    <p>Silahkan isi data anda!</p>
    <div>
        <label for="">Nama</label>
        <input type="text" name="nama" class="form-control form-control-sm">
    </div>
    <br>
    <div>
        <label for="">Status</label>
        <select id="cars" name="status" class="form-control form-control-sm">
            <option value="" style="color: grey">---</option>
            <option value="volvo">Siswa</option>
            <option value="saab">Mahasiswa</option>
        </select>
    </div>
    <div>
        <label for="">Sekolah/Universitas</label>
        <input type="text" name="universitas" class="form-control form-control-sm">
    </div>
    <div>
        <label for="">Jurusan</label>
        <input type="text" name="jurusan" class="form-control form-control-sm">
    </div>
    <br>
    <div class="row">
        <div class="col">
            <input type="date" class="form-control" placeholder="Tgl Masuk" name="email">
        </div>
        <div class="col">
            <input type="date" class="form-control" placeholder="Tgl Selesai" name="pswd">
        </div>
    </div>
    <div>
        <label for=""></label>
        <input type="text" name="bidang" placeholder="Bidang" class="form-control form-control-sm">
    </div>
    <br>
    <div>
        <input type="submit" name="simpan" value="Simpan" class="btn btn-success btn-sm">
    </div>

</div> 
</form>
</body>
</html>
<?php 
    include "koneksi.php";
    if(isset($_POST['simpan'])){
        mysqli_query($koneksi,"insert into tb_magang set
        nama = '$_POST[nama]',
        jurusan = '$_POST[jurusan]',
        universitas = '$_POST[universitas]',
        bidang = '$_POST[bidang]'");

        header("location:index.php");
        echo "Data berhasil disimpan";
    }
?>    