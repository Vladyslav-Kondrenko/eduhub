<?php 
$date = get_the_date('d.m.Y', $id ); ?>
<div class="col-6 col-sm">
  <div class="card-news">
    <a href="<?php the_permalink(); ?>" class="card-img">
      <img src="<?php the_post_thumbnail(); ?>" alt="" class="cover-img">
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