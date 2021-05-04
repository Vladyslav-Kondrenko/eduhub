<div class="country">
	<ul class="country__list">
		<li class="country__item">
			<button data-country="ua" class="btn country__button">Україна</button>
		</li>
		<li class="country__item">
			<button data-country="blocked" class="btn country__button country__button--blocked">Росія</button>
		</li>
		<li class="country__item">
			<button data-country="by" class="btn country__button">Білорусь</button>
		</li>
		</ul>
</div>

<footer class="footer" id="footer">
	<a href="#" class="logo">
		<img src="<?php echo get_template_directory_uri() ?>/build/static/images/general/logo-primary.png" alt="">
	</a>
	<nav class="footer-nav">
		<?php wp_nav_menu(array(
									'menu' => 'footer menu',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее
									'container' => 'ul',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
									'container_class' => '',              // (string) class контейнера (div тега)
									'container_id' => '',              // (string) id контейнера (div тега)
									'menu_class' => 'footer-menu',          // (string) class самого меню (ul тега)
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
		<!-- <ul class="footer-menu">
			<li><a href="#">Курси</a></li>
			<li><a href="#">Заходи</a></li>
			<li><a href="#">Про хаб </a></li>
			<li><a href="#">Контакти </a></li>
		</ul> -->
	</nav>

	<div class="footer-bottom">
		<span class="footer-copyright">&copy; Київський освітній хаб 2019. Усі права захищені</span>
		<div class="soc-menu">
			<span class="soc-name caption">
				Ми в соцмережах
			</span>
			<ul class="soc-links">
				<li>
					<a href="#">
						<svg class="icon">
							<use xlink:href="#facebook">
						</svg>
					</a>
				</li>
				<li>
					<a href="#">
						<svg class="icon">
							<use xlink:href="#instagram">
						</svg>
					</a>
				</li>
				<li>
					<a href="#">
						<svg class="icon">
							<use xlink:href="#linkedin">
						</svg>
					</a>
				</li>
				<li>
					<a href="#">
						<svg class="icon">
							<use xlink:href="#twitter">
						</svg>
					</a>
				</li>
			</ul>
		</div>
	</div>
</footer>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script> -->
<!-- <script src="js/moment.min.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script> -->

<!-- <script src="https://www.youtube.com/player_api"></script> -->
<!-- <script src="js/slider.js"></script>
<script src="js/selectorStylize.js"></script>
<script src="js/smoothScroll.js"></script>
<script src="js/main.js"></script> -->
	<?php wp_footer(); ?>
</body>
</html>