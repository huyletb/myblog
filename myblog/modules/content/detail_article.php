<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="" content="" />
    <!-- <link rel="stylesheet" href="style_index.css" /> -->
	<title></title>
</head>

<body>

<?php
	require ("common/articles.php");
	require ("common/comments.php");
	require ("common/users.php");


	if (isset($_GET['id'])) {
		$article_id = $_GET['id'];
	} else $article_id = "";

	$article = new Articles();
	$article_data = $article -> getArticle_byID($article_id);
	if ($article_data == null) $article->varDump();

	if ($article_data['article_date']==NULL) $article_date = "date of article";
		else $article_date = date('Y-m-d',strtotime($article_data['article_date']));
?>

<!-- show article details -->
<div class="all_articles">
	<div class="article_date">
		<p><?php echo $article_date; ?></p>
	</div>

	<div  class="article_title">
		<h1><?php echo $article_data['article_title']; ?></article_titleh1> 
	</div>

	<div  class="article_body">
		<p><?php  echo $article_data['article_body']; ?></span></p>
	</div>
	<div class="article_category">
		<h3>
		<?php 
			$category_id = $article_data['topic_id'];
			$category = new Category();
			$category_info = $category->getCategoryName_byID($category_id);
			echo ($category_id ==null) ? 'Undefined Cateogory' : 'Category: '.$category_info['category_name'].".";
		 ?>	
		 </h3>
	</div>
</div>



<!-- show comments -->
<?php 
	$comment = new Comments();
	$data = $comment->getComments_byArticle_id($article_id);
	$list_comments = $data[0];
	$number_comments = $data[1];
?>
<div class="article_comments">
	<h2 class="comments_number"><?php
			echo ($list_comments == NULL) ? '0 Comment.' : $number_comments." Comments.";
		 ?></h2>
	<ul>
		<?php 
			foreach ($list_comments as $comment) {
				?>
					<li>
						<div class="comment_body">
							<h3 class="comment_user"><?php 
								$user_id = $comment['user_id'];
								$user = new Users();
								$user_info = $user->getUserName_byID($user_id);
								echo $user_info['user_name']; 
							?></h3>

							<p class="comment_content">
							 	<?php echo $comment['comment_body']; ?>
							</p>
						</div>
					</li>
				<?php
			}
		 ?>	
	</ul>

</div>	
</body>
</html>
