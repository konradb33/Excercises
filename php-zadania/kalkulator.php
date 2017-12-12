<!DOCTYPE HTML>
<head>
  <meta charset="utf-8"/>
</head>
<body>
  <form method="POST" action="">
    <label>Liczba pierwsza<input type="text" name="liczba1" size="10"></label><br>
      <label>Liczba druga<input type="text" name="liczba2" size="10"></label><br>
    <select name="c"><br>
<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
<option>^</option>
<option>pierwiastek</option>
</select>
<input type="submit" value="Oblicz">
  </form>
  
  
  
  
  
  
<?php 
$a = $_POST['liczba1'];
$b = $_POST['liczba2'];
$c = $_POST['c'];
$wynik = "";
    switch($c){
      case '+': 
        $wynik = $a + $b;
        break;
      case '-':
        $wynik = $a - $b;
        break;
      case '*':
        $wynik = $a * $b;
        break;
      case '/':
        $wynik = $a / $b;
        break;
      case '^':
        $wynik = $a * $a;
        break;
      case 'pierwiastek':
        $wynik = sqrt($a);
        break;
      default: "Podaj prawidłowe liczby";
    }
echo $wynik;
  
  

  
?>

</body>