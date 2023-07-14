<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dokument</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<font color="black" size="4px" face="Gabriola">
    <center>
        <h1>'<h1>
            <font color="black" size="6px" face="Gabriola">
                <center>
                <body style="background-image:url(tambah.jpg); background-size:cover; background-attachment">
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Sepeda Motor</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="home.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="objekwisata.php">Objek Wisata</a>
      <a class="nav-item nav-link" href="informasi.php">Informasi Penduduk</a>
      <a class="nav-item nav-link" href="income.php">My Site</a>
      <a class="nav-item nav-link" href="logout.php">Logout</a>
    </div>
  </div>
</nav>
<br>
<form action="" method="post">
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">NIK</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nik" placeholder="KETIK NIK...">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">NAMA PENDUDUK</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama" placeholder="KETIK NAMA PENDUDUK...">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">ALAMAT</label> 
    <div class="col-sm-10">
      <input type="text" class="form-control" name="alamat" placeholder="KETIK ALAMAT...">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">TANGGAL LAHIR</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="tanggal" placeholder="KETIK TANGGAL LAHIR...">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">GOL DARAH</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="gol_darah" placeholder="KETIK GOL DARAH...">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10 offset-2">
      <button type="submit" class="btn btn-primary" name="submit">TAMBAH DATA PENDUDUK</button>
    </div>
  </div>
</form>

</body>
</html>
<?php 
if(isset($_POST['submit'])){
    include "koneksi.php";
    $nik = $_POST["nik"];
    $nama = $_POST["nama"];
    $alamat = $_POST['alamat'];
    $tanggal = $_POST['tanggal'];
    $gol_darah = $_POST['gol_darah'];

    $insert = mysqli_query($conn, "insert into daftarpenduduk set nik='$nik', nama='$nama', alamat='$alamat',tanggal='$tanggal',gol_darah='$gol_darah'");
    header("location:informasi.php?pesan=input");

}
?>