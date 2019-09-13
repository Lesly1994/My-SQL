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
$result = $bdd->query('SELECT lastName , firstName FROM clients WHERE lastName LIKE "M%" ORDER BY  lastName DESC');

// créer une autre variable qui créera un tableau a partir de notre variable result
// $donnees = $result->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>exercice 5</title>
</head>
<body>
	
</body>
</html>
<?php
while($ligne = $result->fetch()){
?>
	<table>
		<tr>
			<td><?php echo $ligne["lastName"]; ?></td>
			<td><?php echo $ligne["firstName"]; ?></td>
		</tr>
	</table>
<?php
}

$result->closeCursor();
?>