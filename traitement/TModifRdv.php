<?php 
	if(isset($_POST['valider'])){
		$name = $_GET['nom']; //variable nom apres modification

		$nom = $_POST['nom'];
		$pass = $_POST['pass'];
		$obj = $nom.";".$pass."\n" ; //contenu du fichier Rdv.csv

		$f = fopen("..Classeur/Rdv.csv", "r");
		$tmp = fopen("../Classeur/tmp.csv", "w");
		while ($tab = fgetcsv($f, 1000, ";")) {
			if ($tab[0] != $name) {
				$svg = $tab[0].";".$tab[1]."\n";// contenu du fichier tmp.csv
				fputs($tmp, $svg);
			}
		}

		fputs($tmp, $sobj);
		fclose($f); //ferme le fichier
		fclose($tmp);
		copy("../Classeur/tmp.csv" , "../Classeur/Rdv.csv"); //copie un fichier
		unlink("../Classeur/tmp.csv"); //Supprime un fichier
		header("location:../View/Liste_rdv.php");
	}
?>