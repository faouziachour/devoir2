Nom & Prenom du Binome : Faouzi Achour & Birouk Abdellah
GROUPE G1


//EXERCICE 1 
<?php

	function tach_couper($string ,$car){
		return explode($car,$string);
	}
	
	$tab=tach_couper("voilà la fonction de tache de couper"," ");
			$i=0;
	foreach($tab as &$j){
			echo $tab[$i].'<br>';
		$i++;
		}

?>

//EXERCICE 2

<?php

try{ 

	if
		(!$fichier = fopen('exo2.txt','r') OR !$fichier1 = fopen('pscde01_CLI1001.txt','w') OR !$fichier2 = fopen('psccl01_CLI1004.txt','w')){
				throw new Exception("Erreur");
			}

	else
		while(!feof($fichier)){
			$Ligne = fgets($fichier);
			if(preg_match('/CLI1001/', $Ligne)){
				fputs($fichier1, $Ligne."\r\n"); 
			}
			else
				fputs($fichier2, $Ligne."\r\n");	
		}


} 

catch(Exception $e) { 
    die($e->getMessage());
}

fclose($fichier);
fclose($fichier1);
fclose($fichier2);

?>


//EXERCICE 3


<html>
<head>
<head>
<body>

<h1>Choisir une date </h1>
 
<form action="valide.php" method="GET">
<table>
		<tr>
		<th>Jour</th>
		<th>Mois</th>
		<th>Année</th>
		</tr>
		<tr>
			<td>
			<select name="jour" id="jour" >
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
					<td>
					<select name="mois" id="mois">
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
					<td>
					<select name="annee" id="annee" >
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                     </select>
					<td>
		</tr>		
			
</table>
			<div>
					<input type ="submit" value="Envoyer" name="envoyer">
			</div>

</form>

</body>
</html>


//EXERCICE4

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body bgcolor>
	<form action="authentification.php" method="GET">
	
		
		<div id="barredroite" style="position: absolute;top:20%;
  left: 35%;padding:1px 16px;height:200px;padding-top: 50px; padding: 60px 30px;
  transition: 0.5s;box-shadow: 0 0 20px rgba(0,0,0,2);text-align: center;border-radius: 10px ;background-image:linear-gradient(120deg,#87CEEB,#4169E1);">
		<h3 align="center">Entrez vos identifiants:</h3>
	
			<div nam="login" style="padding-left:45px;border-radius: 25px;">
				
			<p>	Email : <input type="text" name="email" style="width: 200px; height: 20px"><p>	
			</div nam="login" style="padding-left:75px;border-radius: 25px;">
			<div>
				<p>Mot de passe : <input type="password" name="password" style="width: 200px; height: 20px"></p>
			</div>
			<div nam="login" style="padding-left:75px;border-radius: 25px;">
				<input type="submit" name="Envoyez">
			</div>
	
	</div>
	</form>
</body>
</html>