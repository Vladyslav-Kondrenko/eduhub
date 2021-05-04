<?php
    /*
  * Template name: Заблокована сторінка
  * */

wp_head(); ?>


<div class="blocked">
  <p class="blocked__text"><?php the_field('blocked-text'); ?></p>
  <a href="http://localhost/eduhab/" class="blocked__clear">RESET COOKIE AND GET START PAGE</a>
  <script>
    $('.blocked__clear').on('click', function(){
        function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }
      setCookie('country', '0', 0);
      console.log('cookie reset');
    });
  </script>
</div>

<?php wp_footer(); ?>