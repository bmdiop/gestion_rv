<?php 
	if(isset($_GET['ok'])){
		$nom = $_GET['ok'];
		$f = fopen("../Classeur/Rdv.csv", "r");
		while ($tab = fgetcsv($f, 1000, ";")){
			if ($nom == $tab[0]) {
				$pass == $tab[1];
			}
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>ModifRdv</title>
	<meta charset="utf-8">
	<meta name="vieport">
	<link rel="stylesheet" type="text/css" href="./style/css/bootstrap.css">
</head>
<body>
	<?php 
		if(isset($_GET['ok'])){
			if($_GET['ok'] == true){
				echo "<div class='alert alert-success'>RDV ajouter avec success</div>";
			}
			else{
				echo "<div class='alert alert-danger'> RDV non ajouter</div>";
			}
		}

	?>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<ul class="navbar-nav">
			<li><a href="Liste_rdv.php"class="btn btn-success">GESTION RDV</a></li>
			<li><a href="Liste_admin.php"class="btn btn-success">GESTION ADMIN</a></li>
		</ul>
		
	</nav>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading"> FORMULAIRE de Modification</div>
			<div class="panel-body">
				<form method="POST" action="../Traitement/TModifRdv.php?nom=<?php echo $nom; echo $pass;?>">
					<div class="form-group">
						<label>votre Nom</label>
						<input type="text" name="nom" class="form-control" value="<?php echo $nom;?>">
					</div>
					<div class="form-group">
						<label>Rendez vous</label>
						<input type="text" name="pass" class="form-control" value="<?php echo $pass;?>">
					</div>
					<button type="submit" name="valider" class="btn btn-success">Envoyer</button>
					<button type="reset" name="annuler" class="btn btn-warning">annuler</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>