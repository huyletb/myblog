<?php 
	class Comments extends Database{
		private $_comment = "tbl_comments";
		private $_article_id = "article_id";

		public function getComments_byArticle_id($id){
			$sql = "SELECT *
					FROM $this->_comment
					WHERE $this->_article_id = '$id'";
			$this->query($sql);
			return [$this->fetchAll(), $this->num_rows()];		
		}
	}

?>