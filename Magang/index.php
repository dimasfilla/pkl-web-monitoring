<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body action="" method="post" >
<div class="wrapper">
    <nav class="navbar navbar-expand d-flex flex-colum align-item-start" id="sidebar">
        <a href="#" class="navbar-brand text-light mt-5">
            <div class="display-7 font-weight-bold">DASHBOARD</div>
        </a>
        <ul class="navbar-nav d-flex flex-colum mt-5 w-100" >
            <li class="nav-item w-100">
                <a href="#" class="nav-link text-light p1-4">home</a>
            </li>
        </ul>
    </nav>
</div>
<div class="content">
    <nav class="navbar navbar-expand-sm navbar-dark bg-light">
        <div class="container-fluid">
            <a class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#myModal">Tambah</a>    
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Link</a></li>
                    <li><a class="dropdown-item" href="#">Another link</a></li>
                    <li><a class="dropdown-item" href="#">A third link</a></li>
                </ul>
            </li>
        <form class="d-flex">
            <input class="form-control me-2" type="text" placeholder="Search">
            <button class="btn btn-primary" type="button">Search</button>
        </form>
        </div>
    </nav>
    <div class="modal" id="myModal">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Masukkan data diri anda!</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <!-- Modal body -->
    <div class="modal-body">
        <form action="" method="post">
            <div class="container mt-3">
            <div>
                <label for=""> <h6>Nama</h6></label>
                <input type="text" name="nama" a  class="form-control form-control-sm">
            </div>
            <div>
            <label for=""> <h6>Status</h6></label>
                <select id="cars" name="status" class="form-control form-control-sm">
                    <option value="" style="color:red">-pilih-</option>
                    <option value="">Siswa</option>
                    <option value="">Mahasiswa</option>
                </select>
            </div>
            <div>
                <label for=""> <h6>Sekolah / Universitas</h6></label>
                <input type="text" name="universitas" class="form-control form-control-sm">
            </div>
            <div>
                <label for=""><h6>Jurusan</h6></label>
                <input type="text" name="jurusan" class="form-control form-control-sm">
            </div>
            <div class="row">
                <div class="col">
                    <label for=""> <h6>Tgl Masuk</h6></label>
                    <input type="date" class="form-control" placeholder="Tgl Masuk" name="email">
                </div>
                <div class="col">
                    <label for=""> <h6>Tgl Selesai</h6></label>
                    <input type="date" class="form-control" placeholder="Tgl Selesai" name="pswd">
                </div>
            </div>
            <div>
                <label for=""> <h6>Bidang</h6></label>
                <select id="cars" name="status" class="form-control form-control-sm">
                    <option value="" style="color: red">-pilih-</option>
                    <option value="">SINFO</option>
                    <option value="">SDM</option>
                    <option value="">ADMINISTRASI</option>
                </select>
            </div>
            <div>
                <label for=""> <h6>Unit</h6></label>
                <select id="cars" name="status" class="form-control form-control-sm">
                    <option value="" style="color: red">-pilih-</option>
                    <option value="">unit 1,2</option>
                    <option value="">unit 9</option>
                </select>
            </div>
            <div>
                <label for=""> <h6>Status Magang</h6></label>
                <select id="cars" name="status" class="form-control form-control-sm">
                    <option value="" style="color: red">-pilih-</option>
                    <option value="">Aktif</option>
                    <option value="">Tidak Aktif</option>
                </select>
            </div>
            </div> 
        </form>
    </div>
      <!-- Modal footer -->
    <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Simpan</button>
    </div>
    </div>
  </div>
</div>
<div class="container" >
    <br>
    <table cellspacing="0" cellpadding="5" class="table table-bordered table-sm">
        <tr style="background-color:grey;">
            <th>No</th>
            <th>Nama</th>
            <th>Status</th>
            <th>Sekolah/Universitas</th>
            <th>Jurusan</th>
            <th>Tgl Masuk</th>
            <th>Tgl Selesai</th>
            <th>Bidang</th>
            <th>Unit</th>
            <th>Status Magang</th>
            <th>Keterangan</th>
        </tr>

        <?php
        include "koneksi.php";
        $no=1;
        $ambildata = mysqli_query($koneksi,"select * from tb_magang");
        while ($tampil = mysqli_fetch_array($ambildata)){
            echo"
                <tr>
                    <td>$tampil[no]</td>
                    <td>$tampil[nama]</td>
                    <td>$tampil[jurusan]</td>
                    <td>$tampil[universitas]</td>
                    <td>$tampil[bidang]</td>
                </tr>";
            $no++;
        }
    ?>
    </table>
</div>
</section>
</div>
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