<?php get_header(); ?>
<main class="main" id="main">

	<?php
	include('functions-parts/breadcrumbs.php');

	$title = 'У Києві відкриють «Освіторія Хаб» з коворкінгом, бібліотекою і кінопоказами';
	$titleClasses = 'page-title-sm page-title-bottom-md';
	include('functions-parts/title.php');
	?>

	<section class="section blog-section margin-top-negative-md">
		<div class="wrap">
			<div class="main-image news-main-image">
				<img src="<?php echo get_template_directory_uri() ?>/build/static/images/general/course.jpg" alt="" class="cover-img">
			</div>
			<div class="row-w content blog-content">
				<div class="col-10-w col-md-w">
					<p>У червні в Києві розпочне роботу відкритий простір для освітян «Освіторія Хаб», повідомляє прес-служба проекту. </p>
					<p>Освітній простір площею тисячу квадратних метрів буде розташовано на вулиці Московській, 8Б, неподалік від Мистецького Арсеналу. </p>
					<p>В «Освіторія Хаб» облаштують коворкінг на 40 місць. У ньому можна буде орендувати місце на місяць або погодинно. </p>
					<p>Тут є шість приватних офісів для невеликих колективів на 4-8 працівників, скайп-будки, переговорні кімнати, а також кухня з безкоштовним молоком, кавою, чаєм і печивом, кав’ярня, лаунж-зона, тренувальний зал, душ і туалет. Принтер і сканер – у цілодобовому доступі.</p>
					<img src="<?php echo get_template_directory_uri() ?>/build/static/images/general/I2.png" alt="">
					<p>В лекторії на 170 осіб планують проводити лекції та тренінги запрошених іноземних спікерів і світових лідерів думок в освітній галузі. Лекторій обладнаний акустичною системою і трьома плазмовими екранами. </p>
					<p>Відвідувачі матимуть вільний доступ до бібліотеки з мотиваційною літературою для вчителів і батьків. Одна з родзинок простору – декоративні стіни, обиті м’якими панелями. На них можна прикріпляти файли, малюнки, фото тощо. Ще одна стіна з білого скла в коворкінгу також придатна для малювання та стікерів. На території Хабу розташовано невеликий парк. Цього року поряд відкриють Фестивальну площу, де проводитимуть освітні фестивалі та пізнавальні кемпи для учнів. Крім того, поряд із Хабом працюватиме Міський ринок їжі. </p>
					<p>У новому просторі розміститься тренінговий центр ГС «Освіторія», а також приміщенням зможуть користуватися освітні громадські організації; IT-стартапи, які створюють soft для закладів освіти; батьки, які хочуть дізнатися більше про виховання дітей тощо. Нагадаємо, торік у Києві відкрили новий кампус інноваційного парку UNIT.City з коворкінгом Chasopys.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="section blog-latest">
		<div class="wrap">
			<h2 class="t-center">
				ОСТАННІ НОВИНИ
			</h2>
			<div class="row news-amount">
					<?php $query = get_posts( [
								// 'post_type'      => 'news',
								'posts_per_page' => 2,
								'post_status' => 'publish',
								'post__not_in' => Array(get_the_ID()),
								'orderby' => 'rand',
						] );

				foreach( $query as $post ){ setup_postdata($post);
					$id = get_the_ID();
					news_card_html($id);
				}

				wp_reset_postdata(); ?>
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
				</div> -->
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>