<?php get_header(); ?>
<div class="rev main-visual post_page">
	<div class="container">
		<div class="main-visual__img" style="background-image:url(<?php bloginfo('template_directory'); ?>/img/common/news_bg.png);">
			<img class="pc-only" src="<?php bloginfo('template_directory'); ?>/img/common/news_bg.png" alt="BG-CIEL">
		</div>
		<div class="text-h">
			<div class="text-left">
			<p>Private Salon</p>
			<div class="img"><img class="pc-only" src="<?php bloginfo('template_directory'); ?>/img/common/logo_bg_rev.png" alt="CIEL" /><img class="sp-only" src="<?php bloginfo('template_directory'); ?>/img/top/index-visual-logo.png" alt="CIEL" /><img class="ip5-only" style="display:none;" src="<?php bloginfo('template_directory'); ?>/img/top/index-visual-logo.png" alt="CIEL" /></div>
		</div>
		<div class="text-right">
			<p>Make your Beautiful Life</p>
		</div>
		</div>
	</div>
</div>
<div class="news-cat">
	<div class="container">
		<h6>Campaign</h6>
<?php
				$args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'category_name' => 'campaign', 
					'order' => 'DESC',
					'orderby' => 'date',
				);
				$lang_posts = new WP_Query($args);
				?>
				<?php global $wp_query; $wp_query->in_the_loop = true; ?>
                <table>
                    <tbody>
					<?php if ($lang_posts ->have_posts()) ?>
                        <?php while($lang_posts ->have_posts()): $lang_posts ->the_post();
						$date = get_the_date("Y.m.d");
						?>
                        <tr>
                            <td>
                                <p class="date"><?php echo $date;?></p>
                                <a href="<?php echo get_the_permalink(); ?>" class="title"><?php echo the_title();?></a>
                            </td>
                        </tr>
						<?php endwhile;?>
                    </tbody>
                </table>
	

	</div>
</div>

<?php get_footer(); ?>