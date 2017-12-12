<!DOCTYPE HTML>
<head>
  <meta charset="utf-8"/>
</head>
<body>
<?php 
    $tablica = array(3, 41, 84, 5, 8, 92, 75, 90, 21, 11);
    $n = 10;
  
  for($i = 0; $i < $n; $i++){
    echo $tablica[$i]. ", ";
  }
  echo "<br><br>";
   foreach($tablica as $liczba_pierwsza){
     if($liczba_pierwsza!=1){ 
if (($liczba_pierwsza == 2 || $liczba_pierwsza == 3 || $liczba_pierwsza == 5 || $liczba_pierwsza == 7) || ($liczba_pierwsza % 2 != 0 && $liczba_pierwsza % 3 != 0 && $liczba_pierwsza% 5 != 0 && $liczba_pierwsza % 7 != 0)) 
          { 
            echo "Liczba pierwsza z tablicy to: $liczba_pierwsza"."<br>"; 
          } 

       }  
}

  
  
?>

</body>