<?php

class ReservationUtil {
	
	private static function generateCode($isNumberOnly=false) {
		$config = array(
					"C" => array('characters' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 'minimum' => 4, 'maximum' => 4),
					"N" => array('characters' => '1234567890', 'minimum' => 2, 'maximum' => 2)
			);
				
		if ($isNumberOnly) {
			$config = array(
					"N" => array('characters' => '1234567890', 'minimum' => 16, 'maximum' => 16)
			);
		} 
		// Create the meta-code
		$sMetaCode = "";
			
		foreach ($config as $cToken => $ahCodeSeed) {
			$sMetaCode .= str_repeat($cToken, rand($ahCodeSeed['minimum'], $ahCodeSeed['maximum']));
		}
		$sMetaCode = str_shuffle($sMetaCode);
		
		// Create the real code
		$arBuffer = array();
		for ($i = 0; $i < strlen($sMetaCode); $i ++) {
			$arBuffer[] = $config[(string)$sMetaCode[$i]]['characters'][rand(0, strlen($config[$sMetaCode[$i]]['characters']) - 1)];
		}
		return implode("", $arBuffer);
		
	}
	
	public static function generateBookingCode() {
		return ReservationUtil::generateCode(false);
	}
	public static function generatePaymentCode() {
		return ReservationUtil::generateCode(true);
	}
}
//echo ("Generated Booking Code : " . ReservationUtil::generateBookingCode() . "\n");
//echo ("Generated Payment Code : " . ReservationUtil::generatePaymentCode() . "\n");
?>