<?php
session_start();
if( !isset($_SESSION["login"]) ) {
  header("location: login.php");
  exit;
}

require 'functions.php';
$top10as = query("SELECT * FROM top10as");


if( isset($_POST["pencarian"]) ) {
    $top10as = pencarian($_POST["search"]);
  }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/top.css" />
    <title>nikinikiplay/top10 anime</title>
</head>
<body>
    <nav class="navbar">
      <div class="container">
        <a class="navbar-logo" href="#">
          <img src="img/logo.jpg" alt="" width="100" />
        </a>
      </div>
    </nav>

    <div class="container">
      <h1>Daftar Top10 Anime Series</h1>
        <form action="" method="post" >
          <input type="text" name="search" size="50" placeholder="Cari Anime,,," autocomplete="off" />
          <button type="submit" class="btn btn-outline-success" name="pencarian" style="margin-left: 15px;">cari</button>
        </form>

        <div class="btn">
          <a href="ubah2.php" class="btn btn-dark">Top Anime Series</a>
          <a href="top2.php" class="btn btn-secondary">Top Airing</a>
          <a href="ubah2.php" class="btn btn-secondary">Top Movie</a>
        </div>



      <table class="table">
        <thead>
          <tr>
            <th scope="col">Rank</th>
            <th scope="col">Gambar</th>
            <th scope="col">Judul</th>
            <th scope="col">Ratting</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; foreach($top10as as $top10) : ?>
          <tr>
            <th scope="row" class="align-middle"><?= $i++; ?></th>
            <td class="align-middle">
              <img src="img/top10as/<?= $top10["gambar"]; ?>" height="200">
            </td>
            <th class="align-middle" id="judul"><?= $top10["judul"]; ?>
                <h6 class="align-middle">Genre : <?= $top10["genre"]; ?></h6>
            </th>
            <td class="align-middle"><?= $top10["ratting"]; ?></td>
            <td class="align-middle"><?= $top10["status"]; ?></td>
            <td class="align-middle">
              <a href="" class="btn badge bg-warning">edit</a>
              <a href="" class="btn badge bg-danger">delete</a>
              <a href="info.php?id=<?= $top10["id"]; ?>" class="btn btn-info">info</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <h6>*daftar diatas di ambil dari myanimelist</h6>
    </div>



    
</body>
</html>