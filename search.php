<?php get_header(); ?>
<main class="search-page-override pagination-limit-3">
  <?php get_template_part('template-parts/breadcrumbs'); ?>
  <section class="search_sec">
    <div class="search_sec inner">
      <div class="search_sec_container">
        <?php if (!empty(get_search_query())): ?>
          <?php
          if (have_posts()):
            $total_posts = $wp_query->found_posts;
            ?>
            <div class="search_sec_title">
              <p>「<span><?php echo get_search_query(); ?></span>」の検索結果</p>
              <p><?php echo $total_posts ?>件</p>
            </div>
            <div class="blog_list search_list">
              <ul>
                <?php
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
                              <source srcset="img/sp/blog/blog_sp_01.jpg" media="(max-width: 767px)" />
                              <img src="img/blog/blog_pc_01.jpg" alt="No image" />
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
                        <h2 class="search_right">
                          <?php echo wp_trim_words(get_the_title(), 26, '...'); ?>
                        </h2>
                        <div class="time_right">
                          <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                        </div>
                        <p>
                          <?php echo wp_trim_words(get_the_content(), 120, '...'); ?>
                        </p>
                      </div>
                    </a>
                  </li>
                  <?php
                endwhile;
                ?>
              </ul>
            </div>
            <div class="page">
              <?php wp_pagenavi(); ?>
            </div>
          <?php else: ?>
            <div class="search_sec_title__no-result">
              <p>検索されたキーワードにマッチする<br class="pc-none">記事はありませんでした。</p>
              <a onclick="history.back()" class="c_button contact_button">戻る</a>
            </div>
          <?php endif; ?>
        <?php else: ?>
          <div class="search_sec_title__no-result">
            <p>検索キーワードが未入力です。</p>
            <a onclick="history.back()" class="c_button contact_button">戻る</a>
          </div>
        <?php endif; ?>
      </div>
    </div>
    </div>
    </div>
  </section>
</main>
<?php get_template_part('template-parts/fix-area'); ?>
<?php get_footer(); ?>