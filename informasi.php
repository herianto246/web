<?php
include_once("koneksi.php");
$result=mysqli_query($conn,"SELECT * FROM daftarpenduduk");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<font color="green" size="10px" face="Gabriola">
    <center>
        <h1>'<h1>
            <font color="white" size="6px" face="Gabriola">
                <center>
                <body style="background-image:url(info.jpg); background-size:cover; background-attachment">
<body>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">View</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="home.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="objekwisata.php">Objek Wisata</a>
      <a class="nav-item nav-link" href="informasi.php">Informasi Penduduk</a>
      <a class="nav-item nav-link" href="income.php">Penghasilan Utama</a>
      <a class="nav-item nav-link" href="logout.php">Logout</a>
    </div>
  </div>
</nav>
  <table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">NIK</th>
      <th scope="col">NAMA PENDUDUK</th>
      <th scope="col">ALAMAT</th>
      <th scope="col">TANGGAL LAHIR</th>
      <th scope="col">GOLONGAN DARAH</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>
  <?php
    while($nonim=mysqli_fetch_array($result)){
    ?>
    <tr>
      <td><?php echo $nonim['nik'] ?></td>
      <td><?php echo $nonim['nama'] ?></td>
      <td><?php echo $nonim['alamat'] ?></td>
      <td><?php echo $nonim['tanggal'] ?></td>
      <td><?php echo $nonim['gol_darah'] ?></td>
      <td>
            <a href="edit.php?nik=<?php echo $nonim['nik']; ?>">EDIT</a>||
            <a href="hapus.php?nik=<?php echo $nonim['nik']; ?>">HAPUS</a>
      </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
<a href="tambahdata.php" class="display-4" class="badge"> + TAMBAH DATA</a>
</body>
</html>