<?php 
	if(isset($_POST['valider'])){
		//recuperation des donnees du formulaire 
		$nom = $_POST['nom'];
		$pass = $_POST['pass'];

		$f = fopen("../Classeur/Rdv.csv","a");
		$obj = $nom.";".$pass."\n"; //contenu du fichier
		fputs($f, $obj);
		
		header("location:../View/Liste_rdv.php?ok=true");
	}


?>