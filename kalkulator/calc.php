<!DOCTYPE HTML>
<head>
  <meta charset="utf-8"/>
</head>

  <form method="POST" action="">
    <label>Liczba pierwsza<input type="number" name="liczba1" /></label>
	<label>Liczba druga<input type="number" name="liczba2" /></label>
	<select name="wybor">
		<option value="dodawanie">Dodawanie</option>
		<option value="odejmowanie">Odejmowanie</option>
		<option value="mnozenie">Mnożenie</option>
		<option value="dzielenie">Dzielenie</option>
    <option value="potegowanie">Potęgowanie</option>
    <option value="pierwiastkowanie">Pierwiastkowanie</option>
    <option value="resztadziel">Reszta z dzielenia</option>
    <option value="dzieleniecal">Dzielenie całkowite</option>
	</select>
<input type="submit" name="oblicz" value="wynik" />
  </form>
    
<?php 
  
  class calculator{
		public $liczba1;
		public $liczba2;
    public $wynik;
 public function setPrzyciski($liczba1, $liczba2)
	{
	$this->liczba1 = $liczba1;
	$this->liczba2 = $liczba2;
	}
 
	public function selectWybor($wybor)
	{
		$this->wybor = $wybor;
		switch ($this->wybor)
		{
			case 'Dodawanie':
				$this->dodawanie();
				break;
			case 'Odejmowanie':
				$this->odejmowanie();
				break;
			case 'Mnożenie':
				$this->mnozenie();
				break;
			case 'Dzielenie':
				$this->dzielenie();
				break;
        case 'Potęgowanie':
				$this->potegowanie();
				break;
        case 'Pierwiastkowanie':
				$this->pierwiastkowanie();
				break;
        case 'Reszta z dzielenia':
				$this->resztadziel();
				break;
        case 'Dzielenie całkowite':
				$this->dzieleniecal();
				break;
		}
	}
		
	public	function dodawanie($liczba1, $liczba2)
	{
	echo	$this->wynik = $this->liczba1 + $this->liczba2;
	}
 
	 public function odejmowanie($liczba1, $liczba2)
	{
	echo	$this->wynik = $this->liczba1 - $this->liczba2;
	}
 
	 public function mnozenie($liczba1, $liczba2)
	{
	echo	$this->wynik = $this->liczba1 * $this->liczba2;
	}
 
	 public function dzielenie($liczba1, $liczba2)
	{
		if ($this->liczba2 != 0)
		{
		echo	$this->wynik = $this->liczba1 / $this->liczba2;
		}
		else
		{
			echo "Nie dziel przez zero";
		}
	}
 
	 public function potegowanie($liczba1, $liczba2)
	{
	 echo	$this->wynik = pow($this->liczba1, $this->liczba2);
	}
		
	 public function pierwiastkowanie($liczba1, $liczba2)
	{
	echo	$this->wynik = sqrt($this->liczba1);
	}
		
	 public function resztadziel($liczba1, $liczba2)
	{
	echo	$this->wynik = $this->liczba1 % $this->liczba2;
	}
		
	 public function dzieleniecal($liczba1, $liczba2)
	{
	echo	$this->wynik = floor($this->liczba1 / $this->liczba2);
	}
	public function getWynik()
	{
		return $this->wynik;
	}
 
		}
 
$calc = new calculator();
$calc->setPrzyciski($_POST['liczba1'], $_POST['liczba2']);
$calc->selectWybor($_POST['wybor']);
$wynik = $calc->getWynik();
  ?>
  
