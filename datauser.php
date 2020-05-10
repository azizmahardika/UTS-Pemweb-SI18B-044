<?php
 
class dataUser {
	private $_db;

	public function __construct(database $db) {
		$this->_db = $db;
	}

	public function getUser() {
		return "<pre>".print_r($this->_db->get("user", ""))."</pre>";
	}
}

require "database.php";

$DB = new database();

$datauser = new dataUser($DB);

$datauser->getUser();

?>
