<?php
function print_svg_ic($icon_id) {
  ?>
    <svg>
      <use xlink:href="<?php echo get_template_directory_uri() ?>/build/static/images/svg/symbol/sprite.svg#<?php echo $icon_id ?>"></use>
    </svg>
  <?php
}



function cut_p_tags($dirty_html) {
  $nice_html = $dirty_html;
  $nice_html = str_replace("<p>", "", $nice_html);
  $nice_html = str_replace("</p>", "", $nice_html);
  return $nice_html;
}


function isMobile() {
  $detect = new Mobile_Detect;
  return $detect->isMobile(); 
}
function isTablet() {
  $detect = new Mobile_Detect;
  return $detect->isTablet(); 
}
function isDesktop() {
  return (!isTablet() && !isMobile());
}

function news_card_html($id) {
  $date = get_the_date('d.m.Y', $id ); ?>
    <div class="col-6 col-sm">
      <div class="card-news">
        <a href="<?php the_permalink(); ?>" class="card-img">
          <img src="<?php has_post_thumbnail() ? the_post_thumbnail() : the_field('news-img', 'options'); ?>" alt="" class="cover-img">
        </a>
        <h2 class="card-title">
          <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
          </a>
        </h2>
        <span class="card-date">
          <?php echo $date; ?>
        </span>
      </div>
    </div>
  <?php
}