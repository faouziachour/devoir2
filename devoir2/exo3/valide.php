<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h1>Validation de la date</h1>
	
</body>
</html>
<?php 
session_start();
$jour =$_GET["jour"];
$mois =$_GET["mois"];
$annee=$_GET["annee"];

if(isset($_GET['envoyer'])) {

echo 	"La date saisie est: $jour/$mois/$annee";
echo '<br>';
//echo "La date saisie <b style='color: green;'>est valide</b> "; 

	if($annee>2000 OR $annee<2020){
		echo "La date saisie <b style='color:green;'>est valide</b>";
	}
	else 
		echo "l\'annnee $annee est non bissextile :<b style='color:red;'>est invalide</b> ";

}

?>
 