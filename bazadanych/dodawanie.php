<?php
session_name('csv');
session_start();
?>
<!DOCTYPE HTML>

<head>
  <meta charset="utf-8" />
</head>

<body>
    <form  method="POST" action="dodawanie.php">
      <h3>Dodaj użytkownika</h3>
    <label>Nazwisko<input type="text" name="nazw"></label><br>
    <label>Imię<input type="text" name="imie"></label><br>
    <label>Telefon<input type="number" name="tel"></label><br>
    <label>Miejscowosc<input type="text" name="miejsc"></label><br>
    <input type="submit" value="Dodaj">
  </form>
</body>
<?php //dodawanie użytkownika
  $nazwisko = $_POST['nazw'];
  $imie = $_POST['imie'];
  $telefon = $_POST['tel'];
  $miejscowosc = $_POST['miejsc'];
  $kontakt = array($nazwisko, $imie, $telefon, $miejscowosc);
$new_kontakt = $_SESSION["tablica"];
array_push($_SESSION["tablica"], $kontakt);

?>
<form method="POST" action="zapis.php">
  <input type="submit" value="Zapisz">
</form>
<form method="POST" action="szczegoly.php">
    <input type="submit" value="Szczegóły">
</form>

