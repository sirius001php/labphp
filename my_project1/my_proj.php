<?php
function test1($a, $b){
	$c = $a + $b;
	echo "$c<br>";
	$c = $a - $b;
	echo "$c<br>";
	$c = $a.$b;
	echo "$c<br>";
}

test1(30, 20);
$arr = array('one', 'two', 'three');
for ($i = 0; $i < count($arr); $i++) {
    echo "$arr[$i]<br>";
}
echo "<br>Includ implode function: <br>";
$str = implode(",", $arr);
echo "$str<br>";

echo "<br>Includ explode function: <br>";
$str2 = "first,second,last" ;
$arr2 = explode(",", $str2);
for ($i = 0; $i < count($arr2); $i++) {
    echo "$arr2[$i]<br>";
}

echo "<br>Includ forech function: <br >";
$s = array("Dog" => "Andrea",
		"Kat" => "Sem",
		"Wolf" => "Mad");

foreach ($s as $animal => $name) {
	echo "$animal has name - $name<br>";
}


class Auto{
	public $year;
	public $color;

	function __construct($year, $color){
		$this->year = $year;
		$this->color = $color;
	}

	function GetInfo(){
		return "$this->year $this->color";
	}
}

class diesel extends Auto {
	public $power;
	public $fuel_consumption;

	function __construct($year, $color, $power, $fuel_consumption){
			parent::__construct($year, $color);
			$this->power = $power;
			$this->fuel_consumption = $fuel_consumption;
	}
	function Get(){
		return " $this->power $this->fuel_consumption<br>";
	}
}

$my_auto = new diesel(1999, "red", 340, 20);
echo $my_auto->GetInfo();
echo $my_auto->Get();

?>