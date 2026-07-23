<?php get_header(); ?>
<main>
  <section class="page_fv">
    <div class="page_fv_container">
      <div class="page_fv_overlay"></div>
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/sp/404_sp.jpg" media="(max-width: 767px)" />
        <img src="<?php echo get_template_directory_uri(); ?>/img/404_fv_pc.jpg" alt="お探しのページは見つかりませんでした" />
      </picture>
      <h1 class="page_fv_title">404 not found</h1>
    </div>
  </section>
  <div class="contact_error">
    <div class="inner">
      <div class="contact_error_textbox">
        <p>
          申し訳ございませんが、お探しのページが見つかりませんでした。<br />
          お探しのページは一時的に表示ができない状態にあるか、移動または削除された可能性があります。
        </p>
      </div>
      <div class="submit_button_container">
        <a class="c_button contact_button" href="<?php echo home_url(); ?>">
          ホームへ戻る</a>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>