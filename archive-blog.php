<?php get_header(); ?>
<main>
  <section class="page_fv">
    <div class="page_fv_container">
      <div class="page_fv_overlay"></div>
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>img/sp/blog/blog_fv_sp.jpg"
          media="(max-width: 767px)" />
        <img src="<?php echo get_template_directory_uri(); ?>img/blog/blog_fv_pc.jpg" alt="ギター" />
      </picture>
      <h1 class="page_fv_title">ブログ</h1>
    </div>
  </section>
  <nav class="breadcrumb">
    <div class="breadcrumb_container inner">
      <ul class="breadcrumb_list">
        <li>
          <a class="breadcrumb_link" href="index.html">ホーム</a>
        </li>
        <li class="breadcrumb_item">ブログ</li>
      </ul>
    </div>
  </nav>
  <section class="blog">
    <div class="blog_sec inner">
      <div class="blog_sec_container">
        <div class="sec_title">
          <h2>ブログ一覧</h2>
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
                            <source srcset="<?php echo get_template_directory_uri(); ?>img/sp/blog/blog_sp_01.jpg"
                              media="(max-width: 767px)" />
                            <img src="<?php echo get_template_directory_uri(); ?>img/blog/blog_pc_01.jpg" alt="ギター" />
                          </picture><?php endif; ?>
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
                  <?php
              endwhile;
            endif;
            ?>
            </li>
          </ul>
        </div>
        <div class="page">
          <ul class="Pagination">
            <li class="Pagination-Item">
              <span class="Pagination-Item-Link isActive">1</span>
            </li>
            <li class="Pagination-Item">
              <a class="Pagination-Item-Link" href=""><span class="Pagination">2</span></a>
            </li>
            <li class="Pagination-Item">
              <a class="Pagination-Item-Link" href=""><span class="Pagination">3</span></a>
            </li>
            <li class="Pagination-Item">
              <span class="Pagination_ellipsis">…</span>
            </li>
            <li class="Pagination-Item">
              <a class="Pagination-Item-Link" href=""><span class="Pagination">9</span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_template_part('template-parts/fix-area'); ?>
<?php get_footer(); ?>