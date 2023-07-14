<?php
include_once("koneksi.php");
$result=mysqli_query($conn,"SELECT * FROM daftarpenduduk");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<font color="black" size="4px" face="Gabriola">
    <center>
        <h1>'<h1>
            <font color="white" size="6px" face="algarian">
                <center>
                <body style="background-image:url(bg.jpg); background-size:cover; background-attachment">
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
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="bea.jpg" alt="con" style="width:50%;">
        <div class="carousel-caption">
        </div>
      </div>
      <h2>Bukit Sibea bea merupakan destinasi religi yang terletak di daerah Samosir pada ketinggian 1.021 meter di atas permukaan laut. Bukit ini dikenal sebagai salah satu objek terbaik untuk menikmati Patung Yesus yang baru dibangun.
</h2>

      <div class="item">
        <img src="holbung.jpg" alt="Chicago" style="width:50%;">
        <div class="carousel-caption">
        </div>
      </div>
      <h2>Bukit Holbung (Bahasa Batak: Dolok Holbung; Surat Batak: ᯑᯬᯞᯂᯬ᯲ ᯂᯞᯬ᯲ᯅᯮᯰ ) adalah salah satu tempat wisata di Danau Toba yang terletak perbukitan di Desa Holbung, Kecamatan Sitiotio, Kabupaten Samosir, Sumatra Utara. Rangkaian perbukitan Bukit Holbung ini sudah ada sejak 200 tahun yang lalu.
</h2>
    
      <div class="item">
        <img src="gantung.jpg" alt="New York" style="width:50%;">
        <div class="carousel-caption">
        </div>
      </div>
      <h2>
      Bukit Holbung (Bahasa Batak: Dolok Holbung; Surat Batak: ᯑᯬᯞᯂᯬ᯲ ᯂᯞᯬ᯲ᯅᯮᯰ ) adalah salah satu tempat wisata di Danau Toba yang terletak perbukitan di Desa Holbung, Kecamatan Sitiotio, Kabupaten Samosir, Sumatra Utara. Rangkaian perbukitan Bukit Holbung ini sudah ada sejak 200 tahun yang lalu.
</h2>
    </div>
    <div class="item">
        <img src="pasir.jpg" alt="New York" style="width:50%;">
        <div class="carousel-caption">
        </div>
      </div>
      <h2>
      Pasir Putih Parbaba adalah salah satu tempat wisata favorit yang ada di sekitar Danau Toba Sumatera Utara. Lokasinya berada di Desa Huta Bolon, Kecamatan Pangururan Kabupaten Samosir Sumatera Utara. Berbeda dengan dengan pantai yang sering kita lihat yang ada di tepi laut, sejauh mata memandang yang terlihat adalah langit yang tiada ujung.
</h2>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
</table>
</body>
</html>
