<?php
	class Articles extends Database{

		private $_aticle = "tbl_articles";
		private $_article_id = "article_id";
		private $_article_title = "article_title";
		private $_article_quote = "article_quote";
		private $_category_id = "topic_id";

		public function getArticles_sumary() {
			$sql = "SELECT  $this -> _article_id, 
							$this -> _article_title,
							$this -> _article_quote
					FROM $this -> _aticle
					ORDER BY $this -> _article_id DESC";
			$this -> query($sql);
			return $this -> fetchAll();
		}

		public function getArticle_byID($id) {
			$sql = "SELECT * 
					FROM $this -> _aticle 
					WHERE $this -> _article_id = '$id'";
			$this -> query($sql);
			return $this -> fetch();
		}

		public function getArticles_sumary_byCategory_id($id) {
			$sql = "SELECT 	$this -> _article_id, 
							$this -> _article_title,
							$this -> _article_quote
					FROM $this -> _aticle 
					WHERE $this -> _category_id = '$id' 
					ORDER BY $this -> _article_id DESC";
			$this -> query($sql);
			return $this -> fetchAll();		
		}
	}
?>
