<?php
function Ekspektasi($R1, $R2) {
	$Q1 = exp(($R1/400)*log(10));
	$Q2 = exp(($R2/400)*log(10));
	$Eksp = $Q1/($Q1+$Q2);
	return $Eksp;
}

function EloRating($OLDrating, $statWL, $eksp) {
	if($OLDrating > 2400) {
		$elorate = 16*($statWL - $eksp);
	}else if(($OLDrating <= 2400) and ($OLDrating >= 2100)) {
		$elorate = 24*($statWL - $eksp);
	}else{
		$elorate = 32*($statWL - $eksp);
	}
	return $elorate;
}

?>
