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