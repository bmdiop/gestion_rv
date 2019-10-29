<!DOCTYPE html>
<html>
<head>
	<title> Liste Rdv </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./style/css/bootstrap.css">
	<script type="text/javascript" src="./style/script/script.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<ul class="navbar-nav">
			<li><a href="Liste_rdv.php" class="btn btn-success">GESTION RENDEZ VOUS</a></li>
			<li><a href="Liste_admin.php" class="btn btn-success">GESTION ADMINITRATEUR</a></li>
		</ul>
		
	</nav>
	<div class="container">
		<div class="panel panel-primary">
			<div class="navbar navbar-expand-sm bg-info navbar-info"> Formulaire de modification</div>
			<div class="panel-body">
				<a href="AjoutRdv.php" class="btn btn-success"> Ajout RDV</a>
				<table class="table table-bordered table-striped">
					<tr>
						<th>NOM ET PRENOM</th>
						<th>RENDEZ VOUS</th>
						<th>ACTION1</th>
						<th>ACTION2</th>
					</tr>
					<tr>
						<?php 
							$f = fopen("../Classeur/Rdv.csv", "r");
							while ($tab = fgetcsv($f,1000,";")) {
								echo "<tr>";
								for($i=0; $i < count($tab); $i++){
									echo "<td>".$tab[$i]."</td>";

								}
								echo "<td><a href='ModifRdv.php?ok=$tab[0]' class='btn btn-info btn-block'>Modifier</a></td>
								 <td><a href='../Traitement/TSuppRdv.php?ok=$tab[1]' class='btn btn-danger btn-block' onclick='return confirmation();'>Supprimer</a></td>";
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