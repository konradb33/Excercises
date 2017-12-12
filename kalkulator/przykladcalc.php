<?php
class kalkulator {
var $dzialanie;
var $l1;
var $l2;
var $wynik;
function podajliczby()
{
echo "<form method=post>";
echo "Liczba 1: <input name=l1><br>";
echo "Liczba 2: <input name=l2><br>";
echo "Dzialanie: <input name=dzialanie><br>";
echo "<input type=submit><input type=hidden name=akcja
value=wykonaj></form>";
}
function wynik($dzialanie, $l1, $l2)
{
switch ($dzialanie) {
case '+': $this->wynik = $l1 + $l2; break;
case '-': $this->wynik = $l1 - $l2; break;
case '*': $this->wynik = $l1 * $l2; break;
case '/': $this->wynik = $l1 / $l2; break;
default: $this->wynik ="Podano niepoprawny znak
działania(".dzialanie.")"; break;
}
return($this->wynik);
}

function wypisz($dzialanie, $l1, $l2)
{
$wthis->wynik = $this->wynik($dzialanie, $l1, $l2);
echo "Wynik działania to: ".$this->wynik;
}
}

$object=new kalkulator;
if ($akcja=="wykonaj") {
$object->wypisz($_POST['dzialanie'], $_POST['l1'], $_POST['l2']);
} else {
$object->podajliczby();
}
?>