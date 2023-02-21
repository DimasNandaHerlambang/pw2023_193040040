<?php
$angka = 40;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tugas 1b</title>
</head>

<body>
  <?php
  echo "Aku adalah angka <b>$angka</b> <br>";
  echo "Jika aku dikali 5, maka aku sekarang menjadi <b>" . ($angka = $angka * 5)  . "</b> <br>";
  echo "Jika aku dibagi 2, maka aku sekarang menjadi <b>" . ($angka = $angka /  2) . "</b> <br>";
  echo "Jika aku dikali 75, maka aku sekarang menjadi <b>" . ($angka = $angka + 75) . "</b> <br>";
  echo "Jika aku dikali 20, maka aku sekarang menjadi <b>" . ($angka = $angka - 20) . "</b> <br>";
  ?>



</body>

</html>