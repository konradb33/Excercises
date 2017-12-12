<!DOCTYPE HTML>
<head>
  <meta charset="utf-8"/>
</head>
<body>
<?php 
    $tablica = array(20, 41, 84, 5, 8, 92, 75, 90, 21, 10);
    $suma = 0;
    $max = 0;
    $min = 0;
    $n = 10;
    foreach ($tablica as $suma_tablicy){
    $suma = $suma + $suma_tablicy;

   }
  for ($i=0; $i<$n; $i++){
    if($tablica[$i]<$tablica[$min]);
    if($tablica[$i]>$tablica[$max]);
  }
  
  $srednia_tablicy = ($suma+$suma_tablicy)/10;
  echo "Suma tablicy wynosi: $suma"."<br>";
  echo "Średnia wartosć tablicy wynosi: $srednia_tablicy"."<br>";
  echo "Najmniejsza wartosć tablicy wynosi: $tablica[$min]"."<br>";
  echo "Największa wartoć tablicy wynosi: $tablica[$max]";
  
  
  
  
  
?>

</body>