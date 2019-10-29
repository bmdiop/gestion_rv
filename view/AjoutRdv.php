<!DOCTYPE html>
<html>
<head>
	<title>AjoutRdv</title>
	<meta charset="utf-8">
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
			<li><a href="Liste_rdv.php" class="btn btn-success">GESTION RDV</a></li>
			<li><a href="Liste_admin.php"class="btn btn-success">GESTION ADMINISTRATEUR</a></li>
		</ul>
		
	</nav>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading navbar navbar-expand-sm bg-info navbar-info" > FORMULAIRE D'AJOUT DE RDV</div>
			<div class="panel-body">
				<form method="POST" action="../Traitement/TAjoutRdv.php">
					<div class="form-group">
						<label>VOTRE NOM</label>
						<input type="text" name="nom" class="form-control">
					</div>
					<div class="form-group">
						<label>RENDEZ VOUS</label>
						<input type="text" name="pass" class="form-control">
					</div>
					<button type="submit" name="valider" class="btn btn-success">Envoyer</button>
					<button type="reset" name="annuler" class="btn btn-warning">annuler</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>