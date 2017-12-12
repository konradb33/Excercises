<?php
 
class Calc
{
	protected
		$input,
		$input2,
		$option,
		$error,
		$output;
 
	public function setInputs($int1, $int2)
	{
		$this->input = (int) $int1;
		$this->input2 = (int) $int2;
	}
 
	public function selectOption($option)
	{
		$this->option = $option;
		switch ($this->option)
		{
			case 'Dodaj':
				$this->dodaj();
				break;
			case 'Odejmij':
				$this->odejmij();
				break;
			case 'Pomnóż':
				$this->mnoz();
				break;
			case 'Podziel':
				$this->dziel();
				break;
		}
	}
 
	protected function dodaj()
	{
		$this->output = $this->input + $this->input2;
	}
 
	protected function odejmij()
	{
		$this->output = $this->input - $this->input2;
	}
 
	protected function mnoz()
	{
		$this->output = $this->input * $this->input2;
	}
 
	protected function dziel()
	{
		if ($this->input2 != 0)
		{
			$this->output = $this->input / $this->input2;
		}
		else
		{
			$this->error('dziel_zero');
		}
	}
 
	public function getOutput()
	{
		return $this->output;
	}
 
	protected function error($str)
	{
		$this->error = $str;
		if ($this->error == 'dziel_zero')
		{
			echo 'Wystąpił błąd! Nie można dzielć przez zero!';
		}
	}
}
 
$oop = new Calc();
$oop->setInputs($_POST['int1'], $_POST['int2']);
$oop->selectOption($_POST['option']);
$wynik = $oop->getOutput();
 
?>
 
<form method="post" action="calc.php">
	<input type="text" name="int1" />
	<input type="text" name="int2" />
	<select name="option">
		<option>Dodaj</option>
		<option>Odejmij</option>
		<option>Pomnóż</option>
		<option>Podziel</option>
	</select>
	<input type="submit" value="Wykonaj" />
</form>
 
Wynik: <input type="text" value="<?= $wynik ?>" readonly />