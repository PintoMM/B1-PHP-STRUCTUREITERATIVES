<?php

define ("POIDS_MAX" , 20 ) ;

echo "Saisir le nombre de passagers : " ;
$nbPassagers = rtrim ( fgets ( STDIN ) ) ;
 
echo "Saisir le poids total pour le groupe de " ;
echo $nbPassagers , " passagers : " ;

$poidsTotal = rtrim ( fgets ( STDIN ) ) ;

$poidsMaxAutorise = $nbPassagers * POIDS_MAX ;

if( $poidsTotal <= $poidsMaxAutorise ){
		echo "Poids maximum autorise non depasse. \n" ;
}

else {
	
	echo " Poids total superieur au maximum autorise (" ;
	echo $poidsMaxAutorise , " KG).\n" ;
	
	do {
		
		echo "Nombre de kilos a retirer : " ;
		$nbKg = rtrim ( fgets ( STDIN ) ) ;
		$poidsTotal = $poidsTotal - $nbKg ;
		echo $poidsTotal , "\n" ;
		
	}while ( $poidsTotal < $poidsMaxAutorise ) ;
	
	echo " Poids total de " , $poidsTotal , " autorise. \n" ;
} 

?>

