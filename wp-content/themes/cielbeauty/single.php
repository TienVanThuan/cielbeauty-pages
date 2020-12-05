<?php get_header(); ?>
<div class="main-visual post_page">
	<div class="container">
		<div class="main-visual__img" style="background-image:url(<?php bloginfo('template_directory'); ?>/img/common/news_bg.png);">
			<img class="pc-only" src="<?php bloginfo('template_directory'); ?>/img/common/news_bg.png" alt="BG-CIEL">
		</div>
		<div class="text-h">
			<div class="text-left">
			<p>Private Salon</p>
			<div class="img"><img src="<?php bloginfo('template_directory'); ?>/img/top/index-visual-logo.png" alt="CIEL"></div>
		</div>
		<div class="text-right">
			<p>Make your Beautiful Life</p>
		</div>
		</div>
	</div>
</div>
<div class="new-post-page">
	<div class="container">
		<?php 
		if(have_posts()): while(have_posts()): the_post();
		$category = get_the_category();
		$cat_slug = $category[0]->category_nicename;
		$cat_name = $category[0]->cat_name;
	?>

	<?php echo '<span class="category'.$cat_slug.'">'.$cat_name.'</span>'; ?>
	<div class="date"><?php the_time('Y.m.d'); ?></div>
	<div class="title"><?php the_title(); ?></div>
	<div class="content" id="entrybody"><?php the_content(); ?></div>

	<?php endwhile; else: endif; ?>


<!-- 	<ul>
		<li class="next">&nbsp;<?php next_post_link('%link', '<< 次へ'); ?></li>
		<li class="archive"><a href="./category/<?php echo $cat_slug; ?>/">一覧へ戻る</a></li>
		<li class="prev"><?php previous_post_link('%link', '前へ >>'); ?>&nbsp;</li>
	</ul> -->
	</div>
</div>

<?php get_footer(); ?>