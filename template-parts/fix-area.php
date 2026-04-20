<div class="back-to-top" id="page-top">
  <div class="back-to-top_btn">
    <img src="<?php echo get_template_directory_uri(); ?>/img/other/arrow-top.svg" alt="トップへ戻るボタン" />
  </div>
  <?php if (!is_page('contact')): ?>
    <a href="<?php echo esc_url(home_url('contact')); ?>" class="c_button fixed-buttons__contact">お問い合わせ</a>
  <?php endif; ?>
</div>