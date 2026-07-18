<?php get_header(); ?>
<main>
  <section class="page_fv">
    <div class="page_fv_container">
      <div class="page_fv_overlay result_overlay"></div>
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/sp/result_list/result_fv_sp.jpg"
          media="(max-width: 767px)" />
        <img src="<?php echo get_template_directory_uri(); ?>/img/result_list/result_fv_pc.jpg" alt="ピアノ" />
      </picture>
      <h1 class="page_fv_title">卒業実績</h1>
    </div>
  </section>

  <?php get_template_part('template-parts/breadcrumbs'); ?>

  <div class="result_container">
    <div class="result inner">
      <div class="sec_title">
        <h2>卒業実績一覧</h2>
      </div>

      <?php if (have_posts()):?>

        <div class="achievement_grid">
          <?php
          while (have_posts()):
            the_post();
            ?>
            <div class="achievement_card">
              <a href="<?php the_permalink(); ?>">
                <div class="achievement_img">
                  <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail(); ?>
                  <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" alt="No Image" />
                  <?php endif; ?>
                  <span class="img_title"><?php
                  $terms = get_the_terms(get_the_ID(), 'genre');
                  if (!empty($terms) && !is_wp_error($terms)) {
                    echo $terms[0]->name;
                  }
                  ?></span>
                </div>
                <div class="achievement_content">
                  <p class="achievement_title">
                    <?php echo wp_trim_words(get_the_title(), 20, '...'); ?>
                  </p>
                </div>
                <div class="time_right">
                  <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                </div>
              </a>
            </div>
            <?php
          endwhile;
          ?>
        </div>
        <div class="page">
          <?php wp_pagenavi(); ?>
        </div>
      <?php else:?>
        <p class="no_posts">投稿はありません。</p>
      <?php endif; ?>

    </div>
  </div>
</main>
<?php get_template_part('template-parts/fix-area'); ?>
<?php get_footer(); ?>