<?php

require_once('controller/dataHandler.php');

/**
 * The reservering model
 */
class reserveringsModel {

    /**
    * Create new instance
    */

	 public function __construct()
    {
        $this->dataHandler = new dataHandler("mysql", "localhost", "gameplayparty", "root", "");
    }

        /**
         * Creates data in the tables reservering
         *
         * @param string $reservering_date
         * @param string $begin_tijd
         * @param string $eind_tijd
         * @param string $aantal_personnen
         * @return void
         */
        public function createReservering($reservering_date, $begin_tijd, $eind_tijd, $aantal_personnen ) { 
        
                $sql = "INSERT INTO reservering(reservering_date, begin_tijd, eind_tijd, aantal_personnen) VALUES ('$reservering_date', '$begin_tijd' ,'$eind_tijd', '$aantal_personnen')";
                return $this->dataHandler->CreateData($sql);
            }
        /**
         * slects data from bioscopen
         *
         * @return void
         */
        public function readTijden() {
            $sql = 'SELECT `begintijd`, `eindtijd` FROM bioscopen inner join reservering_tijd ON reservering_tijd.bios_id = bioscopen.bios_id';
            return $this->dataHandler->ReadData($sql);
        }
        /**
         * Creates data in the tables klant
         *
         * @param string $voornaam
         * @param string $achternaam
         * @param string $telefoonnummer
         * @param string $straatnaam
         * @param string $huisnummer
         * @param string $toevoeging
         * @param string $postcode
         * @param string $stad
         * @param string $provincie
         * @return void
         */
        public function createKlant($voornaam, $achternaam , $telefoonnummer, $straatnaam, $huisnummer, $toevoeging, $postcode, $stad, $provincie) {
            $sql = "INSERT INTO klant(voornaam, achternaam, telefoonnummer, straatnaam, huisnummer, toevoeging, postcode, stad, provincie) VALUES ('$voornaam', '$achternaam' ,'$telefoonnummer', '$straatnaam',  '$huisnummer',  '$toevoeging',  '$postcode', '$stad', '$provincie')";
            return $this->dataHandler->CreateData($sql);
        }

}