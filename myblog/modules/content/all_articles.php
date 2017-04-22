<?php
require ("common/articles.php");

$articles = new Articles();
$listArticles = $articles->getArticles_sumary();
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
			} else echo "there're some fuckig errors"; 
		 ?> 
	</ul>
</div>
