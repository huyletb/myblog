<?php
	require ("common/categories.php");

	$category = new Category();
	$listCategories = $category->getCategories();
?>

<div class="left">

<div class="banner">
	<ul>
		<li>
			<a href="index.php"><img src="image/banner.jpg"  class="image"></a>
		</li>
		<li>
			<a href="index.php"><h3 class="title_banner">My Blog</h3></a>
		</li>
	</ul>
</div>

<div class="topic">

	<ul>
		<li><a href="index.php">Home</a></li>
   <?php 
   		if($listCategories != NULL){
   		foreach ($listCategories as $items) { ?>
   			<li><a href="index.php?view=detail_category&id=<?php echo $items['category_id']; ?>"><?php echo $items['category_name']; ?></a></li>
   		<?php }
   	}
   	?>	
	</ul>
</div>

</div>
