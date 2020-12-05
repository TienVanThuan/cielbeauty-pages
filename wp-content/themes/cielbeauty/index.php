<?php get_header(); ?>


<div class="p-top">

<div class="main-visual">
	<div class="container">
		<div class="main-visual__img" style="background-image:url(<?php bloginfo('template_directory'); ?>/img/top/TOP.png);">
			<img class="pc-only" src="<?php bloginfo('template_directory'); ?>/img/top/TOP.png" alt="BG-CIEL">
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
<section class="topcb_discount">
        <div class="container">
            <ul class="discount-row">
                <li class="discount-box">
					<h4><img src="<?php bloginfo('template_directory'); ?>/img/common/discount-h4-left.png" alt="discount h4-left" class="img-disc-left">学割<img src="<?php bloginfo('template_directory'); ?>/img/common/discount-h4-right.png" alt="discount h4-right" class="img-disc-right"></h4>
					<h6>すべての施術コースプランが</h6>
					<p class="discount-n">20<span>%</span><small>OFF</small></p>
					<div class="disc-content">
						<p>学生証のご提示が必要です。<br class="pc-only"> <br class="sp-only">（現在有効な学生証をお持ちください）</p>
						<p>他割引と併用できません。</p>
						<p>新規契約の方のみです。</p>
					</div>
				</li>
                <li class="discount-box">
					<h4><img src="<?php bloginfo('template_directory'); ?>/img/common/discount-h4-left.png" alt="discount h4-left" class="img-disc-left">のりかえ割<img src="<?php bloginfo('template_directory'); ?>/img/common/discount-h4-right.png" alt="discount h4-right" class="img-disc-right"></h4>
					<h6>すべての施術コースプランが</h6>
					<p class="discount-n">20<span>%</span><small>OFF</small></p>
					<div class="disc-content">
						<p>他エステ、クリニックの会員証のご<br class="pc-only"> <br class="sp-only">提示が必要です。</p>
						<p>他割引と併用できません。</p>
						<p>新規契約の方のみです。</p>
					</div>
				</li>
                <li class="discount-box">
					<h4><img src="<?php bloginfo('template_directory'); ?>/img/common/discount-h4-left.png" alt="discount h4-left" class="img-disc-left">ペア割<img src="<?php bloginfo('template_directory'); ?>/img/common/discount-h4-right.png" alt="discount h4-right" class="img-disc-right"></h4>
					<h6>すべての施術コースプランが</h6>
					<p class="discount-n">20<span>%</span><small>OFF</small></p>
					<div class="disc-content">
						<p>２名様以上の同時カウンセリング、当<br class="pc-only"> <br class="sp-only">日同時ご契約いただいた方が対象です。</p>
						<p>他割引と併用できません。</p>
						<p>新規契約の方のみです。</p>
					</div>
				</li>
            </ul>
        </div>
    </section>
    <section class="topcb_psent">
        <div class="container">
            <ul>
                <li>
                    <img src="<?php bloginfo('template_directory'); ?>/img/top/psent_1.png" alt="psent">
                    <div class="psent-txt">
                        <a href="<?php echo home_url(); ?>/bustcare/"><h3>BUST CARE</h3>
                        <p>バストアップ</p></a>
                    </div>
                </li>
                <li>
                    <img src="<?php bloginfo('template_directory'); ?>/img/top/psent_2.png" alt="psent">
                    <div class="psent-txt">
                        <a href="<?php echo home_url(); ?>/epilation/"><h3>EPILATION</h3>
                        <p>脱毛</p></a>
                    </div>
                </li>
                <li>
                    <img src="<?php bloginfo('template_directory'); ?>/img/top/psent_3.png" alt="psent">
                    <div class="psent-txt">
                        <a href="<?php echo home_url(); ?>/facial/"><h3>FACIAL</h3>
                        <p>フェイシャル</p></a>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="topcb_news" id="top_news">
        <div class="container">
            <div class="box-n news-list">
                <div class="title-b">
					<?php 
						$category_id = get_cat_ID( 'news' );
						$category_link = get_category_link( $category_id );
					?>
                    <h4>NEWS</h4> <p>ニュース</p>
                    <a href="<?php echo esc_url( $category_link );?>" class="n-more">一覧を見る<img src="<?php bloginfo('template_directory'); ?>/img/top/chevron-right.png" alt="more-news"> </a>
                </div>
				<?php
				$args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'category_name' => 'news', 
					'order' => 'DESC',
					'orderby' => 'date',
					'posts_per_page' => 3,
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
            <div class="box-n blogs-list">
                <div class="title-b">
					<?php 
						$category_id = get_cat_ID( 'blog' );
						$category_link = get_category_link( $category_id );
					?>
                    <h4>BLOG</h4> <p>ブログ</p>
                    <a href="<?php echo esc_url( $category_link );?>" class="n-more">一覧を見る<img src="<?php bloginfo('template_directory'); ?>/img/top/chevron-right.png" alt="more-blogs"> </a>
                </div>
                <?php
				$args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'category_name' => 'blog', 
					'order' => 'DESC',
					'orderby' => 'date',
					'posts_per_page' => 3,
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
            <div class="box-n campaigns-list">
                <div class="title-b">
					<?php 
						$category_id = get_cat_ID( 'campaign' );
						$category_link = get_category_link( $category_id );
					?>
                    <h4>CAMPAIGN</h4> <p>キャンペーン</p>
                    <a href="<?php echo esc_url( $category_link );?>" class="n-more">一覧を見る<img src="<?php bloginfo('template_directory'); ?>/img/top/chevron-right.png" alt="more-campaigns"> </a>
                </div>
                <?php
				$args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'category_name' => 'campaign', 
					'order' => 'DESC',
					'orderby' => 'date',
					'posts_per_page' => 3,
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
    </section>
	<section class="topcb_social">
		<div class="container">
			<div class="social_box">
				<div class="fb_social">
					<img src="<?php bloginfo('template_directory'); ?>/img/common/face book.png" alt="face-icon">
					<div class="fpage pc-only" style="display:none">
						<div class="fb-page" data-href="https://www.facebook.com/CIEL.bs/" data-tabs="timeline" data-width="500" data-height="550" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/CIEL.bs/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/CIEL.bs/">エステティックサロン CIEL 東京立川南口店</a></blockquote></div>
					</div>
					<div class="fpage sp-only" style="display:none">
						<div class="fb-page" data-href="https://www.facebook.com/CIEL.bs/" data-tabs="timeline" data-width="" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/CIEL.bs/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/CIEL.bs/">エステティックサロン CIEL 東京立川南口店</a></blockquote></div>
					</div>
					
					<div class="fpage ip5-only" style="display:none">
						<div class="fb-page" data-href="https://www.facebook.com/CIEL.bs/" data-tabs="timeline" data-width="310" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/CIEL.bs/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/CIEL.bs/">エステティックサロン CIEL 東京立川南口店</a></blockquote></div>
					</div>
				</div>
				
			<div class="box_instagram">	
				<p class="title"><img src="<?php bloginfo('template_directory'); ?>/img/common/instagram.png" alt="face-icon"></p>
				<?php echo do_shortcode('[instagram-feed num=9 cols=3]'); ?>
			</div>
		</div>
		</div>
	</section>
    <section class="topcb_contact">
        <div class="container">
            <div class="box_contact">
                <div class="counseling">
					<p><a href="https://cielbeauty.backup-b.prontonet.ne.jp/reservation/#free-conf">無料カウンセリングはこちら <img src="/wp-content/themes/cielbeauty/img/common/t-right.png" alt="t-right" /></a></p>
				</div>
                <div class="inquiries_phone">
                    <p>お電話でのお問い合わせは <img src="<?php bloginfo('template_directory'); ?>/img/top/phone-icon.png" alt="phone-icon"><a href="tel:0425189826" class="phone">042-518-9826</a></p>
                </div>
                <div class="about_measures">
					<p><a type="button" id="show_additional" data-modal="#myModal">新型コロナウィルス対策について<img src="<?php bloginfo('template_directory'); ?>/img/top/t-right.png" alt="t-right"></a></p>
                </div>
				<div id="myModal" class="modal">
<div class="additional-coun">
<img src="/wp-content/themes/cielbeauty/img/common/title-additional.png" alt="tite additional" />
<h6>お客様へ大切なお知らせ。</h6>
<p class="txt">「新型コロナウイルス感染予防対策の<br class="sp-only">取り組みについて」</p>
<p class="txt-sp">日頃より<br class="sp-only">Private Salon CIELにご来店いただき、<br class="sp-only">誠にありがとうございます。<br>
当店では新型コロナウイルス感染予防の為、お客様の安心・安全の為、<br class="pc-only">感染予防対策や衛生管理をより一層強化しております。<br class="pc-only">つきましては下記のいずれかに該当されるお客様は事前に<br class= "pc-only">お知らせいただきます様お願い申し上げます。</p>

<div class="box_txt_border">
<div class="box_txt">
<ul>
 	<li>発熱や咳などの症状がある方</li>
 	<li>２週間以内に海外への滞在歴がある方</li>
</ul>
<ul>
 	<li>体調が優れない方</li>
 	<li>滞在歴がある方との接触がある方</li>
</ul></div></div>
<p>
お客様ご自身の健康状態を最優先に考慮し、ご無理のないご予約でご来店いただければと思います。<br class="pc-only">
又こちらからも予約ご変更のお願いをする場合もございますがご了承下さい。
	</p>
<p class="p-txt">また、サロン内における感染防止・安全確保のため、以下の対応をしております。</p>

<div class="box_txt_border">
<div class="border-bt">
<ul>
 	<li>サロン内各ベッドの消毒をお客様ごとに実施</li>
 	<li>全スタッフ、サロン内マスク着用</li>
 	<li>ご来店時お客様用へのアルコール消毒のお願い</li>
 	<li>ダチョウ抗体スプレーによるウイルスの除菌・抗菌</li>
</ul>
<ul>
 	<li>全スタッフの手洗い、うがい、手指消毒の強化</li>
 	<li>サロン内24時間換気</li>
 	<li>店内加湿器に次亜塩素酸系の除菌剤を入れて空気清浄</li>
 	<li>全スタッフ除菌ブロッカーの携帯</li>
</ul>
</div>
</div>
<p class="txt-b">より多くの大切なお客様に安心して<br class="sp-only">Private Salon CIELをご利用いただく為に、<br class= "pc-only">
皆様のご協力のほど、よろしくお願い申し上げます。<br class="pc-only">
又、ご来店後にコロナウイルスへの感染が発した場合は、速やかにお知らせください。</p>
<p>
世界的なこの様な状況が一日も早く終息する事を願うばかりではありますが<br class="pc-only">
まだ厳しい状況が続いております。<br class="pc-only">
Private Salon CIELではお客様の安心、安全を第一に考え営業は継続させて頂きますので<br class="pc-only">
ご理解ご協力のほど<br class="sp-only">よろしくお願い致します。
	</p>
<p>Private Salon CIEL</p>
<img class="img-end" src="/wp-content/themes/cielbeauty/img/common/img_end.png" alt="tite additional" />
</div>
				</div>
            </div>
        </div>
    </section>
</div><!-- /.p-top -->


<?php get_footer(); ?>