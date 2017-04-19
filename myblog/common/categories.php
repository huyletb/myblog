<?php
	class Category extends Database{

		private $_category = "tbl_categories";
		private $_cateory_id = "category_id";
		private $_category_name = "category_name";

		public function getCategories(){
			$sql = "SELECT * 
					FROM $this->_category";
			$this->query($sql);
			return $this->fetchAll();
		}

		public function getCategoryName_byID($id){
			$sql = "SELECT $this->_category_name
					FROM $this->_category 
					WHERE $this->_cateory_id = '$id' ";
			$this->query($sql);
			return $this->fetch();
		}
	}
?>