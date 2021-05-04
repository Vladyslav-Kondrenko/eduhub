<?php


// ==== tips page loadmore function ====//

function events_loadmore()
{
    $paged = $_POST['currentPaged'];
    $postsArray = explode(',', $_POST['postsArray']);

    // echo $tips_slug;

    $query = new WP_Query([
        'post_type'      => 'events',
        'posts_per_page' => 4,
        'paged' => $paged,
        'post__not_in' => $postsArray
    ]);

    while ($query->have_posts()) : $query->the_post();
            $id = get_the_ID();
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
                
        <?php

    endwhile; ?>
        <script>
            queryMaxPages = <?php echo $query->max_num_pages; ?>;
        </script>
    <?php
    wp_reset_postdata();
    die();
}

add_action('wp_ajax_events_loadmore', 'events_loadmore');
add_action('wp_ajax_nopriv_events_loadmore', 'events_loadmore');


function requests_new_post()
{
    $form = sanitize_text_field($_POST['form']);
    $country = $_COOKIE['country'];
    $params = [];
    if($country == 'by'){
        // Если поле с имейлом не заполнено - получить имейл админа
        $email = get_field('email-belarus', 'options') ? get_field('email-belarus', 'options') : get_option('admin_email');
    } else if($country == 'ua'){
        $email = get_field('email-ukraine', 'options') ? get_field('email-ukraine', 'options') : get_option('admin_email');
    }

    parse_str($form, $params);
    print_r($params);
    echo 'work';

    $request_data = array(
            'post_type'     => 'requests',
            'post_title'    => $params['secondName'] .' '. $params['name'],
            'post_status'   => 'draft',
            'post_author'   => 1
        );
        
        $request_post = wp_insert_post( $request_data );
        $request_post_id = $request_post;
        echo $request_post_id;
        echo 'test';
        update_field('name', $params['name'], $request_post_id);
        update_field('secondName', $params['secondName'], $request_post_id);
        update_field('work', $params['work'], $request_post_id);
        update_field('website', $params['website'], $request_post_id);
        update_field('comment', $params['comment'], $request_post_id);
        update_field('country', $country, $request_post_id);


        if (mail($email, "Заявка с сайта", "ФИО:".$params['secondName'] .' '. $params['name'].". Сайт: ".$params['website'] ,"From: example2@mail.ru \r\n")){ 
            echo "сообщение успешно отправлено";
            } else {
                echo "при отправке сообщения возникли ошибки";
            }
    die();
}

add_action('wp_ajax_requests_new_post', 'requests_new_post');
add_action('wp_ajax_nopriv_requests_new_post', 'requests_new_post');


