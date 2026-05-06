<?php
$prev_post = get_previous_post();
$next_post = get_next_post();

// resultページなら 'article--result' というクラスを付けます
$article_class = 'article' . (is_singular('result') ? ' article--result' : '');
?>
<div class="<?php echo esc_attr($article_class); ?>">
  <div class="article_page">
    <div class="article_pagebox">
      <?php if (!empty($prev_post)): ?>
        <a href="<?php echo get_permalink($prev_post->ID); ?>" class="article_link">
          <div class="article_title_prev">◀︎ 前の記事</div>
          <div class="article_textbox">
            <div class="article_textbox_img pc_only">
              <?php if (has_post_thumbnail($prev_post->ID)): ?>
                <?php echo get_the_post_thumbnail($prev_post->ID); ?>
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/blog_details/blog_pc_03.jpg" alt="No image" />
              <?php endif; ?>
            </div>
            <p class="article_text">
              <?php echo wp_trim_words($prev_post->post_title, 25, '...'); ?>
            </p>
          </div>
        </a>
      <?php endif; ?>
    </div>
    <div class="article_pagebox">
      <?php if (!empty($next_post)): ?>
        <a href="<?php echo get_permalink($next_post->ID); ?>" class="article_link">
          <div class="article_title_next">次の記事 ▶︎</div>
          <div class="article_textbox">
            <div class="article_textbox_img pc_only">
              <?php if (has_post_thumbnail($next_post->ID)): ?>
                <?php echo get_the_post_thumbnail($next_post->ID); ?>
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/blog_details/blog_pc_03.jpg" alt="No image" />
              <?php endif; ?>
            </div>
            <p class="article_text">
              <?php echo wp_trim_words($next_post->post_title, 25, '...'); ?>
            </p>
          </div>
        </a>
      <?php endif; ?>
    </div>
  </div>
</div>