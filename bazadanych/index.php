<?php
session_name('csv');
session_start();
?>
<!DOCTYPE HTML>
<head>
  <meta charset="utf-8" />
</head>

<body>
  <form method="POST" action="skrypt.php" enctype="multipart/form-data" >
    <h2>Wybierz bazę danych</h2><br>
    <input type="file" name="plik"><br>
    <input type="submit" value="Wyslij">
  </form>
</body>