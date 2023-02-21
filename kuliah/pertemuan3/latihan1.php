<?php

//  pengulangan while
// 1.Inisisasi / nilai awal
// 2.Komdisi terminasi / kapan pengulangannya berhenti
// 3.Increment / decrement


// While
$nilai_awal = 2;
while ($nilai_awal <= 10) { //Kondisi terminasi
  echo "Hellow world $nilai_awal x<br>";
  $nilai_awal = $nilai_awal + 2;
}

echo "<hr>";
// for
for ($nilai_awal = 1; $nilai_awal <= 10; $nilai_awal++) {
  echo "Hello World $nilai_awal <br>";
}

//$nilai_awal = 2;
//while ($nilai_awal <= 10) { //Kondisi terminasi
//  echo "Hellow world $nilai_awal x<br>";
//  $nilai_awal = $nilai_awal + 2;
//} 
