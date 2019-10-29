<?php 
	function generer($prenom,$nom,$date){
		$ch = substr($prenom, 0,1);
		$ch1 = substr($nom, 0,4);
		$ch2 = substr($date, 8,2);
		$ch3 = substr($date, 0,4);
		$mat = $ch.$ch1.$ch2.$ch3;
		return $mat;
	}

?>