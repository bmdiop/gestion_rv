<?php 
	if(isset($_GET['ok'])){
		$name = $_GET['ok']; //variable nom apres modification


		$f = fopen("..Classeur/Rdv.csv", "r");
		$tmp = fopen("../Classeur/tmp.csv", "w");
		while ($tab = fgetcsv($f, 1000, ";")) {
			if ($tab[0] != $name) {
				$svg = $tab[0].";".$tab[1]."\n";// contenu du fichier tmp.csv
				fputs($tmp, $svg);
			}
		}
		fclose($f);
		fclose($tmp);
		copy("../Classeur/tmp.csv", "../Classeur/Rdv.csv");
		unlink("../Classeur/tmp.csv");
		header("location:../View/Liste_rdv.php");
	}



?>