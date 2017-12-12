<?php

class Komputer {
  var $dysk;
  var $procesor;
  var $ram;
  
  function komp_wl() {
    echo 'Komputer wlaczony';
  }
  
  function komp_wyl() {
    echo 'Komputer wylaczony';
  }
}

if (class_exists('Komputer')) {
  echo 'Klasa "Komputer" istnieje i posiada metody:';
}
else {
  'Brak klasy';
}

$methods = get_class_methods('Komputer');

foreach ($methods as $method) {
  echo '<p>'.$method.'</p>';
}

$komputer1 = new Komputer();
$komputer2 = new Komputer();

$komputer1 -> dysk = 'WD Blue 1 TB';
$komputer1 -> procesor = 'Intel Core i9-7960X';
$komputer1 -> ram = 'Crucial Ballistix Sport LT 2x 4 GB 2400 MHz CL16';

$komputer2 -> dysk = 'WD Black 2 TB';
$komputer2 -> procesor = 'Intel Core i7-7820X';
$komputer2 -> ram = 'Kingston Hyperx Fury 2x 4 GB 2666 MHz CL15';

echo 'Pierwszy komputer:<br>';
echo 'Dysk: '.$komputer1 -> dysk. '<br>Procesor: '. $komputer1 -> procesor. '<br>RAM: '. $komputer1 -> ram;

echo '<br>Drugi komputer:<br>';
echo 'Dysk: '.$komputer2 -> dysk. '<br>Procesor: '. $komputer2 -> procesor. '<br>RAM: '. $komputer2 -> ram;