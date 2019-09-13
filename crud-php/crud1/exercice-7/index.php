<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
// on stock dans la variable result la DB récupérée plus haut
$result = $bdd->query('SELECT * FROM clients');

// créer une autre variable qui créera un tableau a partir de notre variable result
// $donnees = $result->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>exercice 7</title>
</head>
<body>
<?php
while($ligne = $result->fetch()){
?>
	<table>
		<tr>
			<td>
				<table>
					<tr>
						<td> Nom : <?php echo $ligne['lastName'];?></td>
					</tr>
					<tr>
						<td> Prénom : <?php echo $ligne['firstName'];?></td>
					</tr>
					<tr>
						<td> Date de naissance : <?php echo $ligne['birthDate'];?></td>
					</tr>
					<tr>
						<td> Carte de fidélité : <?php echo $ligne['card'];?></td>
					</tr>
					<tr>
						<td> Numéro de carte : <?php echo $ligne['cardNumber'];?></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
<?php
}

$result->closeCursor();
?>
</body>
</html>
