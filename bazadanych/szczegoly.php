<?php
session_name('csv');
session_start();
?>
<?php
$new_kontakt = $_SESSION["tablica"];
  echo "<pre>";
  print_r($new_kontakt);
  echo "</pre>"; 
?>
<!DOCTYPE HTML>

<head>
  <meta charset="utf-8" />
</head>

<body>
  <a href="skrypt.php">Wróć do poprzedniej strony</a>
</body>
