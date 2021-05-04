<?php
    /*
  * Template name: Новини
  * */

get_header();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
?>


<main class="main" id="main">
	<?php
	include('functions-parts/breadcrumbs.php');

	$titleClasses = 'page-title-bottom-md';
	$title = 'НОВИНИ';

	include('functions-parts/title.php');
	?>
	<section class="section margin-top-negative">
		<div class="wrap">
			<div class="row news-amount">
			<?php $query = new WP_Query( [
								// 'post_type'      => 'posts',
								'post_status' => 'publish',
								'posts_per_page' => 4,
								'paged' => $paged,

						] );
				while ($query->have_posts()):$query->the_post();
				$id = get_the_ID();
				news_card_html($id);
				endwhile;  wp_reset_postdata();  ?>
				<!-- <div class="col-6 col-sm">
					<div class="card-news">
						<a href="#" class="card-img">
							<img src="<?php echo get_template_directory_uri() ?>/build/static/images/general/news.png" alt="" class="cover-img">
						</a>
						<h2 class="card-title">
							<a href="#">
								У Києві відкриють «Освіторія Хаб» з коворкінгом, бібліотекою і кінопоказами
							</a>
						</h2>
						<span class="card-date">
							12.03.2019
						</span>
					</div>
				</div>
				<div class="col-6 col-sm">
					<div class="card-news">
						<a href="#" class="card-img">
							<img src="<?php echo get_template_directory_uri() ?>/build/static/images/general/news.png" alt="" class="cover-img">
						</a>
						<h2 class="card-title">
							<a href="#">
								У Києві відкриють «Освіторія Хаб» з коворкінгом, бібліотекою і кінопоказами
							</a>
						</h2>
						<span class="card-date">
							12.03.2019
						</span>
					</div>
				</div>
				<div class="col-6 col-sm">
					<div class="card-news">
						<a href="#" class="card-img">
							<img src="<?php echo get_template_directory_uri() ?>/build/static/images/general/news.png" alt="" class="cover-img">
						</a>
						<h2 class="card-title">
							<a href="#">
								У Києві відкриють «Освіторія Хаб» з коворкінгом, бібліотекою і кінопоказами
							</a>
						</h2>
						<span class="card-date">
							12.03.2019
						</span>
					</div>
				</div> -->
			</div>
			<div class="pagination">
				<!-- <a href="#" class="page-numbers current">1</a>
				<a href="#" class="page-numbers">2</a>
				<a href="#" class="page-numbers">3</a>
				<a href="#" class="page-numbers">4</a>
				<span class="page-numbers dots">...</span>
				<a href="#" class="page-numbers">25</a>
				<a href="#" class="page-numbers next">Далі</a> -->
			<?php
				$big  = 999999999;
				$args = array(
						'base'    => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
						'format'  => '?paged=%#%',
						'current' => max(1, get_query_var('paged')),
						'total'   => $query->max_num_pages,
						'end_size'           => 1,
						'mid_size'           => 2,
						'prev_next'          => true,
						'prev_text'          => '<div class="blog__item-more-arrow blog__item-more-arrow--rotate">Назад</div>',
						'next_text'          => '<div class="page-numbers next">Далі</div>',
						'type'               => 'plain',
						'add_args'           => false,
						'add_fragment'       => '',
						'before_page_number' => '',
						'after_page_number'  => ''
				);
				echo paginate_links($args);
				?>
			</div>
		</div>
	</section>
</main>

<?php include('footer.php'); ?>