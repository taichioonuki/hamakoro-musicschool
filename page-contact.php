<?php get_header(); ?>
<main>
  <section class="page_fv">
    <div class="page_fv_container">
      <div class="page_fv_overlay"></div>
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/sp/contact/contact_sp.jpg"
          media="(max-width: 767px)" />
        <img src="<?php echo get_template_directory_uri(); ?>/img/contact/contact_pc.jpg" alt="ギター" />
      </picture>
      <h1 class="page_fv_title">お問い合わせ</h1>
    </div>
  </section>
  <?php get_template_part('template-parts/breadcrumbs'); ?>
  <div class="contact_form_container">
    <div class="contact inner">
      <p>
        当校に関するご質問・ご相談・資料請求は下記のフォームからお気軽にお問い合わせください。<br />
        通常３営業日以内にメールにてご連絡させていただきます。
      </p>
      <div class="form_wrapper">
        <?php
        if (have_posts()):
          while (have_posts()):
            the_post();
            remove_filter('the_content', 'wpautop');
            the_content();
          endwhile;
        endif;
        ?>
      </div>
    </div>
  </div>
</main>
<div class="back-to-top" id="page-top">
  <div class="back-to-top_btn contact_btn">
    <img src="<?php echo get_template_directory_uri(); ?>/img/other/arrow-top.svg" alt="トップへ戻るボタン" />
  </div>
</div>
<?php get_footer(); ?>