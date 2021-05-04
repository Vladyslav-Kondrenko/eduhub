<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title><?php wp_title(); ?></title>
	<!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet"> -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css"> -->
	<!-- <link rel="stylesheet" href="css/styles.css"> -->
	<?php wp_head(); ?>

		<!-- connect to domain of font files -->
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<!-- optionally increase loading priority -->
	<link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap">
	<!-- async CSS -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" media="print" onload="this.onload=null;this.removeAttribute('media');">
	<!-- no-JS fallback -->
	<noscript>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap">
	</noscript>
</head>

<body>

	<?php include('functions-parts/dev-menu.php'); ?>

	<div class="d-none">
		<?php include('functions-parts/svgmap.php'); ?>
	</div>

	<header class="header" id="header">
		<a href="/" class="logo">
			<img src="<?php echo get_template_directory_uri() ?>/build/static/images/general/logo.png" alt="">
		</a>
		<button class="btn-light-tr btn-menu" id="btn-menu">
			<span class="menu-icon">
				<span class="dot"></span>
				<span class="dot"></span>
				<span class="dot"></span>
				<span class="dot"></span>
				<span class="dot"></span>
				<span class="dot"></span>
				<span class="dot"></span>
				<span class="dot"></span>
				<span class="dot"></span>
			</span>
			<span class="menu-name">Меню</span>
		</button>
		<div class="menu">
			<div class="menu-inner">
				<nav class="menu-nav">
				<?php wp_nav_menu(array(
									'menu' => 'header menu',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее
									'container' => 'ul',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
									'container_class' => '',              // (string) class контейнера (div тега)
									'container_id' => '',              // (string) id контейнера (div тега)
									'menu_class' => 'main-menu',          // (string) class самого меню (ul тега)
									'menu_id' => '',              // (string) id самого меню (ul тега)
									'echo' => true,            // (boolean) Выводить на экран или возвращать для обработки
									'fallback_cb' => '',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
									'before' => '',              // (string) Текст перед <a> каждой ссылки
									'after' => '',              // (string) Текст после </a> каждой ссылки
									'link_before' => '',              // (string) Текст перед анкором (текстом) ссылки
									'link_after' => '',              // (string) Текст после анкора (текста) ссылки
									'depth' => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
									'walker' => '',              // (object) Класс собирающий меню. Default: new Walker_Nav_Menu
							)) ?>
					<!-- <ul class="main-menu">
						<li><a href="#">Головна</a></li>
						<li><a href="#">Курси</a></li>
						<li><a href="#">Вакансії</a></li>
						<li><a href="#">Про хаб</a></li>
					</ul> -->
				</nav>
				<nav class="menu-nav menu-nav--by">
				<?php wp_nav_menu(array(
									'menu' => 'header menu by',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее
									'container' => 'ul',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
									'container_class' => '',              // (string) class контейнера (div тега)
									'container_id' => '',              // (string) id контейнера (div тега)
									'menu_class' => 'main-menu',          // (string) class самого меню (ul тега)
									'menu_id' => '',              // (string) id самого меню (ul тега)
									'echo' => true,            // (boolean) Выводить на экран или возвращать для обработки
									'fallback_cb' => '',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
									'before' => '',              // (string) Текст перед <a> каждой ссылки
									'after' => '',              // (string) Текст после </a> каждой ссылки
									'link_before' => '',              // (string) Текст перед анкором (текстом) ссылки
									'link_after' => '',              // (string) Текст после анкора (текста) ссылки
									'depth' => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
									'walker' => '',              // (object) Класс собирающий меню. Default: new Walker_Nav_Menu
							)) ?>
					<!-- <ul class="main-menu">
						<li><a href="#">Головна</a></li>
						<li><a href="#">Курси</a></li>
						<li><a href="#">Вакансії</a></li>
						<li><a href="#">Про хаб</a></li>
					</ul> -->
				</nav>
				<div class="menu-buttons">
					<a href="#" class="btn-light-tr btn-with-icon">
						<svg class="icon tr-reflect">
							<use xlink:href="#arrow-long">
						</svg>
						<span>Роботодавцю</span>
					</a>
					<a href="#" class="btn-light">Особистий кабінет</a>
				</div>
			</div>
		</div>
	</header>