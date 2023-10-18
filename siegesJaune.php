<?php
define ("NB_SIEGES" , 40 ) ;

for ($numSiege = 1 ; $numSiege <= NB_SIEGES ; $numSiege = $numSiege + 1 ){
	if( $numSiege % 3 == 0 ){
		echo "Siege numero " , $numSiege , "\n" ;
		
	}
}
?>
