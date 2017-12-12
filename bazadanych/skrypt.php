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
    <h2>Zmień baze kontaków</h2><br>
    <input type="file" name="plik"><br>
    <input type="submit" value="Wyslij">
  </form>

  <?php //przesyłanie pliku
   if(isset($_FILES['plik'])){
      $errors= array();
      $file_name = $_FILES['plik']['name'];
      $file_size =$_FILES['plik']['size'];
      $file_tmp =$_FILES['plik']['tmp_name']; 
  if(empty($errors)==true){
         move_uploaded_file($file_tmp,"./pliki/".$file_name);
         
      }else{
         print_r($errors);
      }
   }
?>
  
      <form  method="POST" action="dodawanie.php">
      <h3>Dodaj użytkownika</h3>
    <label>Nazwisko<input type="text" name="nazw"></label><br>
    <label>Imię<input type="text" name="imie"></label><br>
    <label>Telefon<input type="number" name="tel"></label><br>
    <label>Miejscowosc<input type="text" name="miejsc"></label><br>
    <input type="submit" value="Dodaj">
  </form>

  
  <?php // otwieranie pliku 
 $otwarcie = fopen("pliki/$file_name","a+" );
 $odczytanie = fread($otwarcie,filesize("pliki/$file_name"));
 $plik_csv = array_map('str_getcsv', file("pliki/$file_name"));
 $_SESSION["tablica"] = $plik_csv;
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
</body>






