<?php
define ("DERNIER_SIEGE" , 29 ) ;
echo "Sièges du pont d'embarquement :\n";
$numSiege = 20;

while ( $numSiege <= DERNIER_SIEGE ){
	echo "siege numero " , $numSiege , "\n" ;
	$numSiege = $numSiege + 1;

}
?>
