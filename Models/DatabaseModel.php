<?php
class Pdoco {

	protected $loginpdo = "maxence";
	protected $mdppdo = "123";
	protected $hostpdo = '127.0.0.1';
	protected $dbnamepdo = 'portfolio';

	public function getPdo(){

				$bdd = new PDO('mysql:host='.$this->hostpdo.';dbname='.$this->dbnamepdo.';charset=utf8', $this->loginpdo, $this->mdppdo);
			return $bdd;
	}
}

