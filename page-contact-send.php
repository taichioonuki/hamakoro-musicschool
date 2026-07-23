<?php get_header(); ?>
<main>
  <section class="page_fv">
    <div class="page_fv_container">
      <div class="page_fv_overlay"></div>
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/sp/contact/contact_sp.jpg" media="(max-width: 767px)" />
        <img src="<?php echo get_template_directory_uri(); ?>/img/contact/contact_pc.jpg" alt="ギター" />
      </picture>
      <h1 class="page_fv_title">お問い合わせ</h1>
    </div>
  </section>
  <?php get_template_part('template-parts/breadcrumbs'); ?>
  <div class="contact_done">
    <div class="inner">
      <div class="contact_textbox">
        <p>
          お問い合わせいただきありがとうございました。<br />
          内容確認後、担当者よりメールにてご連絡いたします。
        </p>
      </div>
      <div class="submit_button_container">
        <a class="c_button contact_button" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          ホームへ戻る</a>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>