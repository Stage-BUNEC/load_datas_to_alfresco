<?php
	if($argc != 2){
		echo "mauvais usage du script\n";
		echo "Usage:\n		php script.php fichier\n";
		exit(1);
	}

	$postFields = array(
	    "relativePath" => "",
	    "filename" => "",
	    'cm:title' => "",
	    'cm:description' => "",
	    'bc:firstname' => "",
	    'bc:lastname' => "",
	    'bc:bornOnThe' => "",
	    'bc:bornAt' => "",
	    'bc:sex' => "",
	    'bc:of' => "",
	    'bc:numact' => "",
	    'bc:fOnThe' => "",
	    'bc:fAt' => "",
	    'bc:fresid' => "",
	    'bc:foccupation' => "",
	    'bc:fnationality' => "",
	    'bc:fdocref' => "",
	    'bc:mof' => "",
	    'bc:mAt' => "",
	    'bc:mOnThe' => "",
	    'bc:mresid' => "",
	    'bc:mOccupation' => "",
	    'bc:mnationality' => "",
	    'bc:mdocref' => "",
	    'bc:drawingUp' => "",
	    'bc:ondecof' => "",
	    'bc:byUs' => "",
	    'bc:assistedof' => "",
	    'bc:onthe' => "",
	    'bc:region' => "",
	    'bc:departement' => "",
	    'bc:arrondissement' => "",
	    'bc:nipu' => "",
	    'bc:nom_cecp' => ""
    );
	$compte = 1; #cette variable aide a selectionner un champ different a chaque iteration
	#cette boucle permet de parcourir tout les champs du tableau postFields

	foreach($postFields as $cle => $element){
		$commande = 'cut -d# -f'.$compte.' '.$argv[1]; # construction de la commande
		$resultat = shell_exec($commande);	       # execution de la commande et recuperation du reslutat
		$postFields[$cle] = $resultat;                 # ajout du resultat dans postFields
		$compte = $compte + 1;
	}

	foreach($postFields as $cle => $element){
		echo "$cle => $element\n";
	}
?>
