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
