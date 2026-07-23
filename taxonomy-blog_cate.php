<?php get_header(); ?>
<main>
  <section class="page_fv">
    <div class="page_fv_container">
      <div class="page_fv_overlay"></div>
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/sp/blog/blog_fv_sp.jpg"
          media="(max-width: 767px)" />
        <img src="<?php echo get_template_directory_uri(); ?>/img/blog/blog_fv_pc.jpg" alt="ギター" />
      </picture>
      <h1 class="page_fv_title">ブログ</h1>
    </div>
  </section>

  <?php get_template_part('template-parts/breadcrumbs'); ?>

  <section class="blog">
    <div class="blog_sec inner">
      <div class="blog_sec_container">
        <div class="sec_title">
          <?php
          $term = get_queried_object();
          $term_name = isset($term->name) ? $term->name : 'カテゴリー名不明';
          ?>
          <h2>
            <?php echo esc_html($term_name); ?>
          </h2>
        </div>

        <div class="blog_list">
          <ul>
            <?php
            if (have_posts()):
              while (have_posts()):
                the_post();
                ?>
                <li class="blog_item">
                  <a href="<?php the_permalink(); ?>">
                    <div class="blog_item_left">
                      <div class="blog_item_img">
                        <?php if (has_post_thumbnail()): ?>
                          <?php the_post_thumbnail(); ?>
                        <?php else: ?>
                          <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg"
                              media="(max-width: 767px)" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" alt="No Image" />
                          </picture>
                        <?php endif; ?>
                      </div>
                      <span class="img_title"><?php
                      $terms = get_the_terms(get_the_ID(), 'blog_cate');
                      if (!empty($terms) && !is_wp_error($terms)) {
                        echo esc_html($terms[0]->name);
                      }
                      ?></span>
                    </div>

                    <div class="blog_item_right">
                      <h3><?php echo wp_trim_words(get_the_title(), 26, '...'); ?></h3>
                      <div class="time_right">
                        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                      </div>
                      <p>
                        <?php echo wp_trim_words(get_the_content(), 120, '...'); ?>
                      </p>
                    </div>
                  </a>
                </li> <?php
              endwhile;
            endif;
            ?>
          </ul>
        </div>

        <div class="page">
          <?php wp_pagenavi(); ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_template_part('template-parts/fix-area'); ?>
<?php get_footer(); ?>