<?php
$mahasiswa = [
  [
      "nama" => "Sandhika Galih",
      "npm" =>"043040023",
      "email" => "sandhikagalih@unpas.ac.id",
      "jurusan" => "Teknik Informatika"
  ],
  [
      "nama" => "Erik",
      "npm" =>"043030021",
      "email" => "erik@unpas.ac.id",
      "jurusan" => "Teknik Mesin"
  ],
  [
      "nama" => "Sandra",
      "npm" =>"063040033",
      "email" => "sandhikagalih@unpas.ac.id",
      "jurusan" => "Teknik Informatika"
  ],
  [
      "nama" => "Anggoro",
      "email" => "erik@unpas.ac.id",
      "npm" =>"043040024",
      "jurusan" => "Teknik Informatika"
  ]
];
?>
<?php foreach($mahasiswa as $mhs) { ?>
<ul>
    <li>Nama : <?php echo $mhs["nama"]; ?></li>
    <li>Email : <?php echo $mhs["email"]; ?></li>
    <li>Npm : <?php echo $mhs["npm"]; ?></li>
    <li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
</ul>

<!DOCTYPE html>
<html lang="en">
<head>

<title>daftar nilai mahasiswa</title>
</head>
<body>
<h1>Hello, world!</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Npm</th>
      <th scope="col">Jurusan</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach( $mahasiswa as $mhs) : ?>
    <tr>
      <th scope="row">1</th>
      <td>$mhs[0]</td>
      <td>$mhs[1]</td>
      <td>$mhs[2]</td>
      <td>$mhs[3]</td>
      <td><a href="" class="btn btn-danger">edit</button>"
      </td>
    </tr>
  </tbody>
</table>
</body>
</html>