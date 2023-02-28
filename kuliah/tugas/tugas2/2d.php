<!DOCTYPE html>
<html lang="en">

<head>
  <title>Papan Catur</title>
</head>

<body>
  <h1 style="text-align: center;"> Catur</h1>
  <table>
    <?php for ($row = 1; $row <= 5; $row++) {
      echo "<tr>";
      for ($col = 1; $col <= 5; $col++) {
        $total = $row + $col;
        if ($total % 2 == 0) {
          echo '<td style="width: 30px; height:30px; background: #000"></td>';
        } else {
          echo '<td style="width: 30px; height:30px; background: #fff"></td>';
        }
      }
      echo "</tr>";
    }

    ?>

  </table>

</body>

</html>