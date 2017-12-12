<?php
session_name('csv');
session_start();
?>
<?php
  
  $new_kontakt = $_SESSION["tablica"];
  $otwarcie = fopen("pliki/nowabaza.csv","w+" );

    foreach($new_kontakt as $file){
      fputcsv($otwarcie, $file);
    }
    fclose($otwarcie);

    header("Location: index.php");
?>