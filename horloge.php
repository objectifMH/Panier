<?php
require('heure.php');
require('minute.php');
require('seconde.php');

class horloge{
	public $heure;
	public $minute;
	public $seconde;

}

public function __construct($h,$m,$s){
	$this->heure = $h;
 	$this->minute = $m;
 	$this->seconde = $s;
	}


$t = getdate();
echo "<div style='color:white';">$t."</div><br>";

}


?>