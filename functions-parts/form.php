	<?php wp_enqueue_style('form-css', get_template_directory_uri() . '/build/static/css/blocks/form.css');
        wp_enqueue_script('form-js', get_stylesheet_directory_uri() . '/build/static/js/blocks/form.js', array('jquery'), '1.0', true);
?>

  <section class="section section-pd t-center bg-light-grey contact-us">
		<div class="wrap">
			<h2>ФОРМА</h2>

			<form class="contact-us__form" method="POST" id="ajax_form" action="requests_new_post">
				<label class="form-item">
					<input class="contact-us__form-input required" type="text" name="name" placeholder="Ім’я*"/>
				</label>
				<label class="form-item">
					<input class="contact-us__form-input required" type="text" name="secondName" placeholder="Прізвище*"/>
				</label>
				<label class="form-item">
					<input class="contact-us__form-input" type="text" name="work" placeholder="Посада"/>
				</label>
				<label class="form-item">
					<input class="contact-us__form-input" type="text" name="website" placeholder="Веб сайт"/>
				</label>
				<label class="form-item">
					<textarea class="contact-us__form-input required" name="comment" placeholder="Коментар*"></textarea>
				</label>
        <input class="btn" type="submit" id="btn" value="Отправить" />
				<div class="message message--input-error">Одне або декілька полів містять помилку. Будь ласка перевірте і спробуйте знову.</div>
				<div class="message message--error">При відправці Вашого повідомлення сталася помилка. Будь ласка, спробуйте пізніше.</div>
				<div class="message message--success">Дякую за ваше повідомлення. Воно було відправлено. </div>
    	</form>

			<script>
				$('form#ajax_form').submit(function(e) {
          $(this).addClass('loading');
					$('.message').fadeOut();
					e.preventDefault();
					var $form = $(this);
					var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
					var $requiredFields = $(this).find('.required');
					var data = {
								'action': 'requests_new_post',
								'form': decodeURI($form.serialize()),  // decodeURI - фикс ошибки с кириллицей. Без этой функции при unserialize выходит пустая строка
							};

					$requiredFields.each(function(number, field){
						var value = $(field).val();
						console.log(field);
						if( value.length < 2){
							$(field).addClass('error');
							$('.message--input-error').fadeIn();
							e.preventDefault();
							$('form.loading').removeClass('loading');
						} else{
							$(field).removeClass('error');
						}
					});
					// если в форме нету input, textarea с классом error - отправляем AJAX
					if(!$requiredFields.hasClass('error')){
						$.ajax({
							type: $form.attr('method'),
							url: ajaxurl,
							data: data,
							success: function (data) {
                $('form.loading').removeClass('loading');
									if (data) {
										console.log(data);
									}
								}
						}).done(function() {
							// сбрасываем значение инпутов 
							$form[0].reset();
							$('.message--success').fadeIn();

						}).fail(function() {
              $('input.loading').removeClass('loading');
							$('.message--error').fadeIn();
						});
					}
				});

			</script>
		</div>
	</section>