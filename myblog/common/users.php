<?php
class Users extends Database {
	private $_user = "tbl_users";
	private $_user_name = "user_name";
	private $_user_id = "user_id";

	public function getUserName_byID($id) {
		$sql = "SELECT $this->_user_name
				FROM $this->_user
				WHERE $this->_user_id = '$id'";
		$this->query($sql);
		return $this->fetch();		
	}
}

?>
