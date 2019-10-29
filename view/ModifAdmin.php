<!DOCTYPE html>
<html>
<head>
	<title> Liste Admin </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./style/css/bootstrap.css">
	<script type="text/javascript" src="./style/script/script.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<ul class="navbar-nav">
			<li><a href="Liste_rdv.php"class="btn btn-success">GESTION RDV</a></li>
			<li><a href="Liste_admin.php"class="btn btn-success">gestion admin</a></li>
		</ul>
		
	</nav>
	<div class="container">
		<div class="panel panel-primary">
			<div class=" navbar navbar-expand-sm bg-info navbar-info"> Formulaire de modification</div>
			<div class="panel-body">
				<a href="AjoutAdmin.php" class="btn btn-success"> Ajout Admin</a>
				<table class="table table-bordered table-striped">
					<tr>
						<th>Matricule</th>
						<th>nom</th>
						<th>prenom</th>
						<th>sexe</th>
						<th>date de naissance</th>
						<th>Service</th>
						<th>Action1</th>
						<th>Action2</th>
					</tr>
					<tr>
						<?php 
							$f = fopen("../Classeur/Admin.csv", "r");
							while ($tab = fgetcsv($f,1000,";")) {
								echo "<tr>";
								for($i=0; $i < count($tab); $i++){
									echo "<td>".$tab[$i]."</td>";

								}
								echo "<td><a href='ModifAdmin.php?ok=$tab[0]' class='btn btn-info btn-block'>Modifier</a></td>";
								echo "<td><a href='../Traitement/TSuppRdv.php?ok=$tab[0]' class='btn btn-danger btn-block' onclick='return confirmation();'>Supprimer</a></td>";
								echo "</tr>";
							
							}
						?>
					</tr>
				</table>
				
			</div>
		</div>
	</div>

</body>
</html>