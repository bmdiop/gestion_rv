<?php
require_once 'GenererMat.php'; 
	if(isset($_POST['valider'])){
		//recuperation des donnees du formulaire 
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$sexe = $_POST['sexe'];
		$naissance = $_POST['naissance'];
		$service = $_POST['service'];
		$mat = generer($prenom,$nom,$naissance);


		$f = fopen("../Classeur/Admin.csv","a");
		$obj = $mat.";".$nom.";".$prenom.";".$sexe.";".$naissance.";".$service."\n"; //contenu du fichier
		fputs($f, $obj);
		
		header("location:../View/Liste_admin.php?ok=true");
	}


?>