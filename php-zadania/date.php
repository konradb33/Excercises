<!DOCTYPE HTML>
<head>
  <meta charset="utf-8"/>
</head>
<body>
<?php 
    $dni_tygodnia = array("Poniedziałek", "Wtorek", "Środa", "Czwartek", "Piątek", "Sobota", "Niedziela");
    $y = 1998;
    $m = 11;
    $d = 15;
  
  $YY = ($y-1) % 100;
  $C = ($y-1) - $YY;
  $G = $YY + ($YY/4);
  
  $dzien_tygodnia_dla_stycznia = ((((($C / 100) % 4) * 5) + $G) % 7);
  $dzien_roku = 319;
  $dzien_tygodnia = ($dzien_tygodnia_dla_stycznia + $dzien_roku - 1) % 7;
  
  echo "<pre>";
  print_r ($dni_tygodnia);
  echo "</pre>";
  echo "Dzień tygodnia moich urodzin to: $dzien_tygodnia";
  
?>

</body>