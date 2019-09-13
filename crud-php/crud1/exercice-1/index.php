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
	<title>exercice 1</title>
</head>
<body>
	<table>
		<?php  while($ligne = $result->fetch()){
		?>
		<tr>
			<td>
				<?php echo $ligne['lastName']. " " .$ligne['firstName']; }; ?>
			</td>
		</tr>
	</table>
</body>
</html>