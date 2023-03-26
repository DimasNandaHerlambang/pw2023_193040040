<?php

$mahasiswa = [
  [
    "nama" => "Dimas Nanda Herlambang",
    "nrp" => "193040040",
    "email" => "193040040@mail.unpas.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "dim.jpg"

  ],
  [
    "nama" => "Fauzan Ihsannudin Ramadhan",
    "nrp" => "193040047",
    "email" => "193040047@mail.unpas.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "dim.jpg"

  ],
  [
    "nama" => "Vikri Aditya",
    "nrp" => "193040048",
    "email" => "193040048@mail.unpas.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "dim.jpg"

  ],
  [
    "nama" => "Rifki Maulana",
    "nrp" => "193040049",
    "email" => "193040049@mail.unpas.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "dim.jpg"

  ],
  [
    "nama" => "Rifki Gema Fauzi",
    "nrp" => "193040050",
    "email" => "193040050@mail.unpas.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "dim.jpg"

  ],
  [
    "nama" => "Naufal Hamid",
    "nrp" => "193040051",
    "email" => "193040051@mail.unpas.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "dim.jpg"

  ],
  [
    "nama" => "Rafid Rabbani",
    "nrp" => "193040052",
    "email" => "193040047@mail.unpas.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "dim.jpg"

  ],
  [
    "nama" => "Rio Saputra",
    "nrp" => "193040063",
    "email" => "193040063@mail.unpas.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "dim.jpg"

  ],
  [
    "nama" => "Sulthan Jihad",
    "nrp" => "193040073",
    "email" => "19304073@mail.unpas.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "dim.jpg"

  ],
  [
    "nama" => "Lamhot Kristoper",
    "nrp" => "193040088",
    "email" => "193040088@mail.unpas.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "dim.jpg"

  ]

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Daftar Mahasiswa</title>
</head>

<body>

  <h1>Daftar Mahasiswa</h1>

  <?php foreach ($mahasiswa as $mhs) : ?>

    <ul>
      <li>
        <img src="img/<?php echo $mhs["gambar"]; ?>">
      </li>
      <li>NAMA :<?php echo $mhs["nama"]; ?></li>
      <li>NRP :<?php echo $mhs["nrp"]; ?></li>
      <li>EMAIL :<?php echo $mhs["email"]; ?></li>
      <li>JURUSAN :<?php echo $mhs["jurusan"]; ?></li>
    </ul>
  <?php endforeach; ?>

</body>

</html>