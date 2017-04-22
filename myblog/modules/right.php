<div class="right">
	<?php
		if (isset($_GET['view'])) {
			$view = $_GET['view'];
		} else $view = "";

		if ($view == "detail_category") {
			include 'content/detail_category.php';;
		} else if ($view == 'detail_article') {
			include 'content/detail_article.php';
		} else {
			include 'content/all_articles.php';
		}
	?>
</div>
