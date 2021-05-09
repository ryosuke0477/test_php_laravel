<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .border {
      border-collapse: collapse;
    }
    .border tr td {
      border: solid;
    }
  </style>
</head>

<body>
  <table class="border">
    <?php
    for ($i = 1; $i < 10; $i++) {
      echo '<tr>';
      for ($j = 1; $j < 10; $j++) {
        $x = $i * $j;
        print '<td>' . $x . '</td>';
      }
      echo '</tr>';
    }
    ?>
  </table>
</body>

</html>