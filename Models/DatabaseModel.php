<?php 

// Déclaration du model (Oprimisation de celui-ci à venir)
class DatabaseModel {

	// Déclaration des attributs permettant la connexion à la bdd (base de donnée)
	protected $loginpdo = "maxence";
	protected $mdppdo = "123";
	protected $hostpdo = '127.0.0.1';
	protected $dbnamepdo = 'portfolio';

		// Déclaration de la méthode getPdo permettant la connexion à la bdd
		public function getPdo(){

				// On rentrer la connexion de la bdd pdo dans une variable
				$bdd = new PDO('mysql:host='.$this->hostpdo.';dbname='.$this->dbnamepdo.';charset=utf8', $this->loginpdo, $this->mdppdo);
			// On retourn cette variable afin de pouvoir l'utiliser dans les différentes méthodes du model
			return $bdd;
		}
}