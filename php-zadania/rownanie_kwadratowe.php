<!DOCTYPE HTML>
<head>
  <meta charset="utf-8"/>
</head>
<body>
<?php 
  
  $a = 1;
  $b = 2;
  $c = 1;
  $delta = ($b*$b) - (4*$a*$c);
   if ($delta > 0){
     $sqrt = sqrt($delta);
     $x1 =  (-$b-$sqrt)/2*$a;
     $x2 =  (-$b+$sqrt)/2*$a;
     echo "Równanie ma dwa rozwiązania: $x1 i $x2";
   }
  elseif ($delta == 0){
    $x0 =  (-$b)/2*$a;
    echo "Równanie ma jedno rozwiązanie: $x0";
  }
  else {
    echo "Brak rozwiązań równania";
  }
?>

</body>