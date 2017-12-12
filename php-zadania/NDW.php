<!DOCTYPE HTML>
<head>
  <meta charset="utf-8"/>
</head>
<body>
<?php 

  $x = 126;
  $y = 84;
  
  $a=$x;
  $b=$y;
    while( $a != $b){
      if ($a > $b) $a = $a - $b;
      else  $b = $b-$a;
    }
  $NWD = $a;
  echo('Dla a='.$x.' i b='.$y.' NWD = '.$NWD);

?>

  <?php
  
  
  
  
  
  ?>
  
  
  
  
</body>