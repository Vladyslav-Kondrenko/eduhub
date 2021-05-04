<?php
    /*
  * Template name: Головна сторінка
  * */

get_header();
?>


<?php // include('header.php'); ?>
<main class="main" id="main">
	<?php

	$titleClasses = 'page-title-center page-title-lg';
	$title = 'КИЇВСЬКИЙ ОСВІТНІЙ ХАБ';

	$titleDescription = true;
	$titleBtns = true;

	include('functions-parts/title.php');
	?>

	<nav class="anchor-nav">
		<div class="wrap">
			<ul class="anchor-menu">
				<li><a href="#">Твої можливості</a></li>
				<li><a href="#">Як формується рейтинг</a></li>
				<li><a href="#">Про хаб</a></li>
				<li><a href="#">Заходи</a></li>
				<li><a href="#">Інтерактивне резюме</a></li>
				<li><a href="#">Безкоштовно?</a></li>
			</ul>
		</div>
	</nav>

	<section class="section section-pd">
		<div class="wrap">
			<h2 class="col-7-w col-md-8-w col-sm-w">
				ТВОЇ МОЖЛИВОСТІ ДЛЯ УСПІШНОЇ КАР'ЄРИ ТА ЖИТТЯ
			</h2>
			<div class="row row-mg-lg row-texts">
				<div class="col-6 col-md desc-item">
					<h3 class="like-h5">
						НАВИЧКИ SOFT SKILLS (М’ЯКІ НАВИЧКИ)
					</h3>
					<p>
						розвинь у собі навички майбутнього/ХХІ століття та стань пріоритетною ціллю для українських та міжнародних компаній (роботодавців) або відкрий успішну власну справу.
					</p>
				</div>
				<div class="col-6 col-md desc-item">
					<h3 class="like-h5">
						МЕТОД ЗМІШАНОГО НАВЧАННЯ (BLENDED LEARNING)
					</h3>
					<p>
						навчайся за інноваційним методом, який використовують провідні міжнародні корпорації та найуспішніші держави.
					</p>
				</div>
				<div class="col-6 col-md desc-item">
					<h3 class="like-h5">
						ОСВІТА ВПРОДОВЖ ЖИТТЯ (LIFELONG LEARNING)
					</h3>
					<p>
						відчуй особисту впевненість у сучасному світі, який постійно змінюється. Цьому не вчать у жодній школі та університеті/жодному навчальному закладі!
					</p>
				</div>
				<div class="col-6 col-md desc-item">
					<h3 class="like-h5">
						НЕТВОРКІНГ
					</h3>
					<p>
						познайомся особисто з успішними та відомими українцями
					</p>
				</div>
				<div class="col-6 col-md desc-item">
					<h3 class="like-h5">
						КЛУБ УСПІШНИХ ЛЮДЕЙ
					</h3>
					<p>
						увійди до когорти найкращих та найзатребуваніших людей в Україні.
					</p>
				</div>
				<div class="col-6 col-md desc-item">
					<div class="desc-item-slogan">
						І ВСЕ ЦЕ <br> БЕЗКОШТОВНО!
					</div>
				</div>
			</div>
			<a href="#" class="to-video">
				<img src="<?php echo get_template_directory_uri() ?>/build/static/images/general/course.jpg" alt="">
				<button class="btn-tr play-btn">
					<svg class="icon">
						<use xlink:href="#play">
					</svg>
				</button>
			</a>
			<div class="buttons">
				<a href="#" class="btn">ПОЧАТИ НАВЧАННЯ</a>
				<a href="#" class="btn-tr">НАВИЧКИ МАЙБУТНЬОГО</a>
			</div>
		</div>
	</section>

	<section class="section section-pd bg-primary">
		<div class="wrap">
			<div class="row justify-content-sb">
				<div class="col-5 col-md">
					<h2>
						НАВЧАННЯ ТОП-НАВИЧКАМ, В ПЕРШУ ЧЕРГУ, НАЙБІЛЬШ ЗАТРЕБУВАНИМ У 2020 РОЦІ
					</h2>
					<span class="col-8-w text-desc-style white">
						Відповідно до даних Всесвітнього Економічного Форуму
					</span>
				</div>
				<div class="col-6 col-md">
					<ul class="list-border">
						<li>1. Розв’язання комплексних задач </li>
						<li>2. Критичне мислення</li>
						<li>3. Креативність</li>
						<li>4. Управлінські таланти</li>
						<li>5. Взаємодія з людьми</li>
						<li>6. Емоційний інтелект</li>
						<li>7. Здатність правильно мислити та приймати ефективні рішення</li>
						<li>8. Орієнтація на обслуговування</li>
						<li>9. Навички ведення переговорів</li>
						<li>10. Гнучкість мислення</li>
						<li>11. Здатність швидко навчатись</li>
						<li>12. Вільно володіти іноземними мовами</li>
					</ul>
				</div>
			</div>
		</div>
	</section>


	<section class="section section-pd">
		<div class="wrap">
			<div class="row justify-content-sb">
				<h2 class="col-5 col-md">
					ІНТЕРАКТИВНЕ РЕЗЮМЕ
				</h2>
				<div class="col-6 col-md text-desc-style">
					<p>
						Інтерактивне Резюме – це Твій «біо-паспорт», Твоя візитна картка, Твій квиток до світу успіху/успішних людей. Тобі більше не потрібне старе резюме, яке окрім загальних фактів не говорить про Тебе геть нічого. Стань одним із перших, хто перейшов на сучасний вид резюме, адже будь-який/справжній Роботодавець та Інвестор бажає знати про Тебе більше, ніж де Ти народився (-лась), скільки Тобі років і які навчальні заклади Ти закінчив (-ла).
					</p>
					<p>
						У сучасному світі найголовніше – це володіння навичками та знаннями, які є справжнім портретом Твоєї Особистості.
					</p>
				</div>
			</div>
			<div class="row justify-content-sb">
				<div class="col-6 col-sm desc-item">
					<svg class="icon">
						<use xlink:href="#demonstration">
					</svg>
					<h3 class="like-h5">
						УВАГА РОБОТОДАВЦІВ ТА ІНВЕСТОРІВ
					</h3>
					<p>
						Інтерактивне резюме бачать роботодавці та інвестори та сайті Київського Освітнього Хабу, коли шукають співробітників або можливості для інвестування
					</p>
				</div>
				<div class="col-6 col-sm desc-item">
					<svg class="icon">
						<use xlink:href="#cloud-computing">
					</svg>
					<h3 class="like-h5">
						ЗРУЧНЕ ПЕРЕСИЛАННЯ
					</h3>
					<p>
						Інтерактивне резюме Ти можеш надіслати прямо з нашого порталу будь-якому адресату замість стандартного резюме, тим самим збільшити свої шанси в очах роботодавців
					</p>
				</div>
				<div class="col-6 col-sm desc-item">
					<svg class="icon">
						<use xlink:href="#printer">
					</svg>
					<h3 class="like-h5">
						МОЖНА РОЗДРУКУВАТИ
					</h3>
					<p>
						Інтерактивне резюме Ти можеш роздрукувати та використовувати за власним потребами
					</p>
				</div>
				<div class="col-6 col-sm desc-item">
					<svg class="icon">
						<use xlink:href="#medal">
					</svg>
					<h3 class="like-h5">
						ПРИКЛАД ДЛЯ ІНШИХ
					</h3>
					<p>
						Інтерактивне резюме – це показник Твого руху сходинками успіху. Це - Твоє дзеркало, в яке буде приємно дивитись щодня, адже ніщо так не прикрашає людину, як її власна праця, досягнення результату та перемога над самим собою. Стань прикладом для своїх близьких та друзів.
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-pd section-text bg-light-grey">
		<div class="wrap">
			<svg class="icon">
				<use xlink:href="#warning">
			</svg>
			<p class="col-10-w col-sm-w">
				Інтерактивне Резюме за Твоїм бажанням може бути у доступі для перегляду та запрошення Тебе на співбесіду роботодавцями (комерційними компаніями, ЗМІ, громадськими організаціями, державними та комунальними структурами тощо), а також інвесторами з метою знаходження можливостей для інвестицій у Тебе та Твої проекти.
			</p>
		</div>
	</section>

	<section class="section section-pd bg-primary">
		<div class="wrap">
			<h2>ЯК ПРАЦЮЄ ХАБ?</h2>
			<div class="line-blocks">
				<div class="line-block-item">
					<span class="line-block-title">Онлайн навчання та тестування</span>
					<div class="info-label" data-info="1">
						<svg class="icon">
							<use xlink:href="#info">
						</svg>
					</div>
					<div class="info-hover" data-info="1">
						<svg class="icon">
							<use xlink:href="#info">
						</svg>
						<span>
							за результатами тестування та навчання, формується Рейтинг на основі технології-блокчейн за кожною навичкою та Інтерактивне Резюме по кожному користувачу і пропонується роботодавцям та інвесторам для запрошення на співбесіду
						</span>
					</div>
				</div>
				<div class="line-block-item">
					<span class="line-block-title">Навчання офлайн в Хабі</span>
					<div class="info-label" data-info="2">
						<svg class="icon">
							<use xlink:href="#info">
						</svg>
					</div>
					<div class="info-hover" data-info="2">
						<svg class="icon">
							<use xlink:href="#info">
						</svg>
						<span>
							за результатами тестування та навчання, формується Рейтинг на основі технології-блокчейн за кожною навичкою та Інтерактивне Резюме по кожному користувачу і пропонується роботодавцям та інвесторам для запрошення на співбесіду
						</span>
					</div>
				</div>
				<div class="line-block-item">
					<span class="line-block-title">Кадровий резерв Києва</span>
					<div class="info-label" data-info="3">
						<svg class="icon">
							<use xlink:href="#info">
						</svg>
					</div>
					<div class="info-hover" data-info="3">
						<svg class="icon">
							<use xlink:href="#info">
						</svg>
						<span>
							за результатами тестування та навчання, формується Рейтинг на основі технології-блокчейн за кожною навичкою та Інтерактивне Резюме по кожному користувачу і пропонується роботодавцям та інвесторам для запрошення на співбесіду
						</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-pd section-news">
		<div class="wrap ">
			<h2>ЖИВЕ СПІЛКУВАННЯ</h2>
			<div class="row card-square-amount">
				<div class="col-6 col-md">
					<div class="card-square special-card">
						<div class="card-square-sp">
							<span class="text">
								Окрім тестування, навчання топовим навичкам та побудови успішної кар’єри Ти отримуєш можливість відвідувати наші FAN-активності:
							</span>
							<ul>
								<li>Презентації українських та міжнародних компаній</li>
								<li>Чемпіонати з інтелектуальних ігор</li>
								<li>Історії успіху</li>
								<li>Кіно Клуб</li>
								<li>Lingva SHOW</li>
								<li>Школа HR</li>
							</ul>
						</div>
					</div>
				</div>
				 <?php 
				 		$posts_array = [];
						$query = new WP_Query( [
								'post_type'      => 'events',
								'posts_per_page' => 3,
								'post_status' => 'publish',
						] );
						while ($query->have_posts()):$query->the_post(); ?>
						<?php $id = get_the_ID();
									$posts_array[] = $id;
									$authors = get_the_terms($id, 'events-authors');
									$tags = get_the_terms($id, 'events-types');
									$day = get_the_date('d', $id);
									$month = get_the_date('F Y', $id);
									$year = get_the_date('Y', $id);

						?>
						<div class="col-6 col-md">
							<div class="card-square">
								<div class="card-square-inner">
									<div class="card-square-date">
										<span class="day">
											<?= $day; ?>
										</span>
										<span class="month">
											<?=$month; ?>
										</span>
									</div>
									<div class="card-square-title">
											<?php if($tags){
											foreach ($tags as $number => $tag) { ?>
											<span><?php if($number > 0){ echo', ';}?>#<?php echo $tag -> name;  ?></span> 
									 	<?php	}};?>
										<h2>
											<a href="<?php the_permalink(); ?>" class="like-h3">
												<?php the_title(); ?>
											</a>
										</h2>
										<?php if($authors){
											foreach ($authors as $number => $author) { ?>
											<span><?php if($number > 0){ echo', ';} echo $author -> name;  ?></span> 
									 	<?php	}};?>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile;  wp_reset_postdata();  ?>

				<!-- <div class="col-6 col-md">
					<div class="card-square">
						<div class="card-square-inner">
							<div class="card-square-date">
								<span class="day">
									20
								</span>
								<span class="month">
									Січня 2019
								</span>
							</div>
							<div class="card-square-title">
								<span># Історії успіху</span>
								<h2>
									<a href="#" class="like-h3">
										Як бути касиром в АТБ та їздити на Bentley Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor temporibus nesciunt possimus dolores consequuntur officiis non iste amet commodi dicta?
									</a>
								</h2>
								<span>Андрій Вертихвіст</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-6 col-md">
					<div class="card-square">
						<div class="card-square-inner">
							<div class="card-square-date">
								<span class="day">
									20
								</span>
								<span class="month">
									Січня 2019
								</span>
							</div>
							<div class="card-square-title">
								<span># Історії успіху</span>
								<h2>
									<a href="#" class="like-h3">
										Як бути касиром в АТБ та їздити на Bentley
									</a>
								</h2>
								<span>Андрій Вертихвіст</span>
							</div>
						</div>
					</div>
				</div> -->

			</div>
				<?php if($query->max_num_pages > 0){ ?>
					<a href="#" class="btn events-loadmore">
					Ще заходи
				</a>
				<?php } ?>
		</div>
	</section>

	<script>
	 let queryMaxPages = <?php echo $query->max_num_pages; ?>,
       queryCurrentPaged = 0,
			 ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
			 postsArray = '<?php echo implode(',', $posts_array); ?>'; // записываем все посты которые мы уже вывели
			 console.log(postsArray);
			 
			 console.log(queryCurrentPaged, queryMaxPages);
		$('.events-loadmore').on('click', function(e){
			e.preventDefault();
			$(this).hide();

			data = {
							'action': 'events_loadmore',
							'currentPaged': ++queryCurrentPaged,
							'postsArray': postsArray,
            };

			$.ajax({
            url: ajaxurl, // обработчик
            data: data, // данные
            type: 'POST', // тип запроса
            success: function (data) {
                if (data) {
									console.log(data);
                    // вставляем новые посты
                    // $('.blog_item').after(data);
                    
                    $('.card-square-amount').append(data);
                    
                    // queryCurrentPaged++; // увеличиваем номер страницы на единицу
                    if (queryCurrentPaged !== queryMaxPages) $(".events-loadmore").show(); // если последняя страница, удаляем кнопку                
								}
							}
        });
		});

	</script>

	<section class="section section-pd-lg bg-primary section-text-lg">
		<div class="wrap-sm">
			<h2>ЧИ СПРАВДІ БЕЗКОШТОВНО?</h2>
			<span class="text">
				Звичайно ні – адже Ти «розраховуєшся» своїм бажанням та часом, своєю мотивацією вдосконалити власні навички та стати ще ресурнішим та конкурентноспроможнішим, ніж є зараз. Система рейтингу комплексно враховує Твою успішність у навчанні і активність у відвідуванні заходів у ХАБі, особливо їй «не подобається», коли Ти записався у календарі заходів та не прийшов, адже це місце зайняла би інша людина.
			</span>
			<div class="footnote">
				<svg class="icon">
					<use xlink:href="#warning-round">
				</svg>
				<div class="text">
					Порушення <a href="#">правил Київського Освітнього ХАБу</a> суттєво впливає на Твій рейтинг.
				</div>
			</div>
		</div>
	</section>

	<section class="section section-pd">
		<div class="wrap">
			<h2>ДЛЯ ФАХІВЦІВ</h2>
			<div class="row card-full-light-amount">
				<div class="col">
					<div class="card-full-light">
						<div class="card-full-light-inner">
							<div class="card-full-light-title">
								<span class="caption"># Для фахівців</span>
								<span class="caption"></span>
								<h3>
									<a href="#" class="like-h3">
										КЛУБ HR
									</a>
								</h3>
								<span class="desc like-h3">
									обговорення нагальних проблем освіти та презентація найкращих світових практик їх вирішення
								</span>
							</div>
						</div>
						<img src="<?php echo get_template_directory_uri() ?>/build/static/images/general/card.jpg" alt="" class="cover-img">
					</div>
				</div>
				<div class="col">
					<div class="card-full-light">
						<div class="card-full-light-inner">
							<div class="card-full-light-title">
								<span class="caption"># Для фахівців</span>
								<span class="caption"></span>
								<h3>
									<a href="#" class="like-h3">
										КЛУБ HR
									</a>
								</h3>
								<span class="desc like-h3">
									обговорення нагальних проблем освіти та презентація найкращих світових практик їх вирішення
								</span>
							</div>
						</div>
						<img src="<?php echo get_template_directory_uri() ?>/build/static/images/general/card.jpg" alt="" class="cover-img">
					</div>
				</div>
				<div class="col">
					<div class="card-full-light">
						<div class="card-full-light-inner">
							<div class="card-full-light-title">
								<span class="caption"># Для фахівців</span>
								<span class="caption"></span>
								<h3>
									<a href="#" class="like-h3">
										КЛУБ HR
									</a>
								</h3>
								<span class="desc like-h3">
									обговорення нагальних проблем освіти та презентація найкращих світових практик їх вирішення
								</span>
							</div>
						</div>
						<img src="<?php echo get_template_directory_uri() ?>/build/static/images/general/card.jpg" alt="" class="cover-img">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-pd bg-light-grey t-center">
		<div class="wrap">
			<h2>НАШІ ПАРТНЕРИ</h2>
			<ul class="slider partners-slider" id="partners">
				<li class="slider-item"><img src="<?php echo get_template_directory_uri() ?>/build/static/images/partners/hub.svg" alt=""></li>
				<li class="slider-item"><img src="<?php echo get_template_directory_uri() ?>/build/static/images/partners/microsoft.svg" alt=""></li>
				<li class="slider-item"><img src="<?php echo get_template_directory_uri() ?>/build/static/images/partners/atb.svg" alt=""></li>
				<li class="slider-item"><img src="<?php echo get_template_directory_uri() ?>/build/static/images/partners/hub.svg" alt=""></li>
				<li class="slider-item"><img src="<?php echo get_template_directory_uri() ?>/build/static/images/partners/microsoft.svg" alt=""></li>
				<li class="slider-item"><img src="<?php echo get_template_directory_uri() ?>/build/static/images/partners/atb.svg" alt=""></li>
				<li class="slider-item"><img src="<?php echo get_template_directory_uri() ?>/build/static/images/partners/hub.svg" alt=""></li>
				<li class="slider-item"><img src="<?php echo get_template_directory_uri() ?>/build/static/images/partners/microsoft.svg" alt=""></li>
				<li class="slider-item"><img src="<?php echo get_template_directory_uri() ?>/build/static/images/partners/atb.svg" alt=""></li>
			</ul>
		</div>
	</section>

	<?php include('functions-parts/form.php'); ?>



	<?php get_footer(); ?>