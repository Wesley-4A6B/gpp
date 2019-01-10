<?php

require_once('controller/dataHandler.php');

/**
 * the admin model
 */
class adminModel {

	/**
    * Create new instance
    */

	 public function __construct()
    {
        $this->dataHandler = new dataHandler("mysql", "localhost", "gameplayparty", "root", "");
	}
	
	/**
	 * creates data in the table bioscopen
	 *
	 * @param string $naam
	 * @param string $foto
	 * @param string $adres
	 * @param string $postcode
	 * @param string $stad
	 * @param string $provincie
	 * @param date $begintijd
	 * @param date $eindtijd
	 * @param string $auto
	 * @param string $ov
	 * @param string $fiets
	 * @param string $rolstoel
	 * @param string $voorwaarden
	 * @param string $link
	 * @return void
	 */
    public function createBios($naam, $foto , $adres, $postcode, $stad, $provincie, $begintijd, $eindtijd, $auto, $ov, $fiets, $rolstoel, $voorwaarden, $link) { 
	
	try {
		if ($rolstoel == "ja") {
			$toegang = 1;
		} else {
			$toegang = 0;
		}

		$sql = "INSERT INTO bioscopen(bios_naam, image, adres, postcode, stad, provincie, begintijd, eindtijd, bereikbaar_auto, bereikbaar_ov, bereikbaar_fiets, rolstoeltoegankelijkheid, voorwaarden, link) VALUES ('$naam', '$foto' ,'$adres', '$postcode', '$stad', '$provincie', '$begintijd',  '$eindtijd',  '$auto',  '$ov',  '$fiets',  '$toegang', '$voorwaarden', '$link')";
		$result = $this->dataHandler->CreateData($sql);

		return $result;
	} catch (Exception $e) {
		throw $e;
	}
		return $result;
	}

	
	/**
	 * Slects all date form table paginas
	 *
	 * @return void
	 */
	public function readCMS()
    {
       $query = 'SELECT * FROM paginas';
       $cms = $this->dataHandler->ReadData($query);

       return $cms;
    }
}
