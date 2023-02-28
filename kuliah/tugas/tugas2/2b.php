<?php
for ($a = 1; $a <= 10; $a++) {
  for ($b = 10; $b >= $a; $b--) {
    echo " ";
  }
  for ($c = 1; $c <= $a; $c++) {
    echo "$c";
  }
  echo "<br>";
}
