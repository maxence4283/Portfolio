<?php
class Pdoco {

	protected $userpdo = "maxence";
	protected $mdppdo = "123";

	protected function getPdo(){

			$bdd = new PDO('mysql:host=localhost;dbname=portfolio', $this->userpdo, $this->mdppdo);
			return $bdd;
	}
}

