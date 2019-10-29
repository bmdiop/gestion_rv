<!DOCTYPE html>
<html>
<head>
	<title>AjoutAdmin</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./style/css/bootstrap.min.css">
</head>
<body>
	<?php 
		if(isset($_GET['ok'])){
			if($_GET['ok'] == true){
				echo "<div class='alert alert-success'>ADMINISTRATEUR ajouter avec success</div>";
			}
			else{
				echo "<div class='alert alert-danger'> ADMINISTRATEUR non ajouter</div>";
			}
		}

	?>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<ul class="navbar-nav">
			<li><a href="Liste_rdv.php" class="btn btn-success">GESTION RDV</a></li>
			<li><a href="Liste_admin.php" class="btn btn-success">GESTION ADMINISTRATEUR</a></li>
		</ul>
		
	</nav>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading"> FORMULAIRE D'AJOUT D'ADMIN</div>
			<div class="panel-body">
				<form method="POST" action="../Traitement/TAjoutAdmin.php">
					<div class="form-group">
						<label>Nom</label>
						<input type="text" name="nom" class="form-control">
					</div>
					<div class="form-group">
						<label>prenom</label>
						<input type="text" name="prenom" class="form-control">
					</div>
					<div  class="form-group">
						<label>Sexe</label>
						<label class="radio-inline"><input type="radio" name="sexe" value="Masculin">Masculin</label>
						<label class="radio-inline"><input type="radio" name="sexe" value="Feminin">Feminin</label>
					</div>
					<div class="form-group">
						<label>Date de naissance</label>
						<input type="Date" name="naissance" class="form-control">
					</div>
					<div>
						<label>Service</label>
						<select name="Service">
							<option value="">Faite votre choix</option>
							<?php 
								$f = fopen("../Classeur/Rdv.csv","r");
								while ($tab = fgetcsv($f, 1000, ";")) {
									echo "<option value='$tab[0]'>$tab[0]</option>";
								}

							?>
						</select>
					</div>
					<button type="submit" name="valider" class="btn btn-success">Envoyer</button>
					<button type="reset" name="annuler" class="btn btn-warning">annuler</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>