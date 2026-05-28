<footer class="footer">
  <div class="footer_container inner">
    <nav class="footer_nav">
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'footer',      // functions.phpで決めた識別子
          'container' => false,         // 余計な div を出さない
          'menu_class' => 'footer_list', // ul につくクラス名
          'add_li_class' => 'footer_item', // li につくクラス名（※要フック）
        )
      );
      ?>
    </nav>
    <div class="footer_logo">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/icon_logo/logo-white.svg"
          alt="きたむらミュージックスクールのロゴ" /></a>
    </div>
    <div class="footer_copyright">
      Copyright © 0000 KITAMURA music school Inc. All Rights
    </div>
    <div class="footer_sns">
      <ul>
        <li>
          <a href="index.html" target="_blank" rel="noopener"><img
              src="<?php echo get_template_directory_uri(); ?>/img/icon_logo/icon-twitter.svg" alt="twitter" /></a>
        </li>
        <li>
          <a href="index.html" target="_blank" rel="noopener"><img
              src="<?php echo get_template_directory_uri(); ?>/img/icon_logo/icon-facebook.svg" alt="facebook" /></a>
        </li>
        <li>
          <a href="index.html" target="_blank" rel="noopener"><img
              src="<?php echo get_template_directory_uri(); ?>/img/icon_logo/icon-youtube.svg" alt="youtube" /></a>
        </li>
        <li>
          <a href="index.html" target="_blank" rel="noopener"><img
              src="<?php echo get_template_directory_uri(); ?>/img/icon_logo/icon-instagram.svg" alt="instagram" /></a>
        </li>
      </ul>
    </div>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/simplebar@latest/dist/simplebar.min.js"></script>
<?php wp_footer(); ?>
</body>

</html>