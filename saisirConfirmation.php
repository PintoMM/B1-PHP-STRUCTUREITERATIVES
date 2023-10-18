<?php
define ("MODIFICATION_ANNULE" , "non" ) ;


do {
	echo "Confirmez-vous la modification (oui/non)\n";
	$reponse = rtrim ( fgets ( STDIN ) );
	echo "Reponse incorrecte \n\n";

} while ( $reponse != MODIFICATION_ANNULE );
echo "Modification annule \n" ;
	
?>
