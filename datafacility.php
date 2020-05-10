<?php
 
class dataFacility {
	private $_db;

	public function __construct(database $db) {
		$this->_db = $db;
	}

	public function getFacility() {
		return "<pre>".print_r($this->_db->get("facility", ""))."</pre>";
	}
}

require "database.php";

$DB = new database();

$datauser = new dataFacility($DB);

$datauser->getFacility();

?>
