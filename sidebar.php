<aside class="sidebar">
  <div class="sidebar_mail">
    <p class="sidebar_title">無料メールマガジン</p>
    <div class="banner">
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/blog_details/banner.jpg" alt="バナー広告" /></a>
    </div>
  </div>
  <div class="sidebar_search">
      <?php get_search_form(); ?>
  </div>
  <div class="sidebar_posts">
    <p class="sidebar_title">おすすめの記事</p>
    <ul class="post_list">
      <?php
      $args = array(
        'posts_per_page' => 3,
        'post_type' => 'blog',
        'taxonomy' => 'blog_recommend',
        'term' => 'recommend',
        'orderby' => 'date',
        'order' => 'DESC'
      );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()):
        while ($the_query->have_posts()):
          $the_query->the_post();
          ?>
          <li class="post_item">
            <a href="<?php the_permalink(); ?>" class="post_link">
              <div class="post_img_wrapper">
                <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail(); ?>
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" alt="タイトル" />
                <?php endif; ?>
              </div>
              <p class="post_item_title">
                <?php echo wp_trim_words(get_the_title(), 15, '...'); ?>
              </p>
            </a>
            <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
      </li>
    </ul>
  </div>
  <div class="sidebar_category">
    <p class="sidebar_title">カテゴリー</p>
    <ul class="category_list">
      <?php
      $terms = get_terms([
        'taxonomy' => 'blog_cate',
        'hide_empty' => true,
      ]);
      if (!is_wp_error($terms) && !empty($terms)):
        foreach ($terms as $term):
          $term_link = get_term_link($term->term_id);
          ?>
          <li class="category_item">
            <a href="<?php echo esc_url($term_link); ?>" class="category_link"><?php echo esc_html($term->name); ?></a>
          </li>
          <?php
        endforeach;
      endif;
      ?>
    </ul>
  </div>
</aside>