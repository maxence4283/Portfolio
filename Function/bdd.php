<?php

class Pdo {

private $user = "maxence";
private $mdp = "123";

	public function getPdo(){
		$bdd = new PDO('mysql:host=localhost;dbname=portfolio', $user, $pass);
		return $bdd;
	}

}