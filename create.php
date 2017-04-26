<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter une randonnée</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
	<a href="/read.php">Liste des données</a>
	<h1>Ajouter</h1>
	<form action="" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" value="">
		</div>

		<div>
			<label for="difficulty">Difficulté</label>
			<select name="difficulty">
				<option value="très facile">Très facile</option>
				<option value="facile">Facile</option>
				<option value="moyen">Moyen</option>
				<option value="difficile">Difficile</option>
				<option value="très difficile">Très difficile</option>
			</select>
		</div>
		
		<div>
			<label for="distance">Distance</label>
			<input type="text" name="distance" value="">
		</div>
		<div>
			<label for="duration">Durée</label>
			<input type="duration" name="duration" value="">
		</div>
		<div>
			<label for="height_difference">Dénivelé</label>
			<input type="text" name="height_difference" value="">
		</div>
		<button type="submit" name="button">Envoyer</button>
	</form>
	<?php 
	require_once dirname(__FILE__).'/vendor/autoload.php';
	ORM::configure('mysql:host=localhost;dbname=reunion_island;charset=utf8');
	ORM::configure('username', 'root');
	ORM::configure('password', 'root');
	if(isset($_POST['submit'])) 
	{

		$rando = ORM::for_table('hiking')->create();

		$rando->name = $_POST['name'];
		$rando->difficulty = $_POST['difficulty'];
		$rando->distance = $_POST['distance'];
		$rando->duration = $_POST['duration'];
		$rando->height_difference = $_POST['height_difference'];

		$rando->save();
	}
	
	?>
</body>
</html>
