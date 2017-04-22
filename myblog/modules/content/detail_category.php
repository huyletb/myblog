<?php
require ("common/articles.php");

if (isset($_GET['id'])) {
	$category_id = $_GET['id'];
}
else $category_id = "";

$articles = new Articles();
$listArticles = $articles->getArticles_sumary_byCategory_id($category_id);
?>

<div class="all_articles">
	<ul>
		 <?php
		 	if ($listArticles != NULL) { 
		 		foreach ($listArticles as $item) {
		 ?> 

			<li>
				<div class="item">
					<div class="article_summary">
						<h2 class="article_title"><a href="index.php?view=detail_article&id=<?php echo $item['article_id']; ?>">		<?php echo $item['article_id'].". ".$item['article_title']; ?></a></h2>
						<p class="article_quote"><span><?php echo $item['article_quote']; ?></span></p>
					</div>
				</div>
			</li>

			<?php
				} 
			} else echo 'There are no fucking any articles here';
		 ?> 
	</ul>
</div>
